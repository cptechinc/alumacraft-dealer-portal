<?php

declare(strict_types=1);

namespace atk4\core;

trait FactoryTrait
{
    /**
     * Check this property to see if trait is present in the object.
     *
     * @var bool
     */
    public $_factoryTrait = true;

    /**
     * Given two seeds (or more) will merge them, prioritizing the first argument.
     * If object is passed on either of arguments, then it will setDefaults() remaining
     * arguments, respecting their positioning.
     *
     * See full documentation.
     *
     * @param array|object|mixed $seed
     * @param array|object|mixed $seed2
     * @param array              $more_seeds
     *
     * @return object|array if at least one seed is an object, will return object
     */
    public function mergeSeeds($seed, $seed2, ...$more_seeds)
    {
        // recursively merge extra seeds
        if ($more_seeds) {
            $seed2 = $this->mergeSeeds($seed2, ...$more_seeds);
        }

        if (is_object($seed)) {
            if (is_array($seed2)) {
                // set defaults but don't override existing properties
                $arguments = array_filter($seed2, 'is_numeric', ARRAY_FILTER_USE_KEY); // with numeric keys
                $injection = array_diff_key($seed2, $arguments); // with string keys
                if ($injection) {
                    if (isset($seed->_DIContainerTrait)) {
                        $seed->setDefaults($injection, true);
                    } else {
                        throw new Exception([
                            'factory() requested to passively inject some properties into existing object that does not use \atk4\core\DIContainerTrait',
                            'object' => $seed,
                            'injection' => $injection,
                        ]);
                    }
                }
            }

            return $seed;
        }

        if (is_object($seed2)) {
            // seed is not object, and setDefaults will complain if it's not array
            if (is_array($seed)) {
                $arguments = array_filter($seed, 'is_numeric', ARRAY_FILTER_USE_KEY); // with numeric keys
                $injection = array_diff_key($seed, $arguments); // with string keys
                if ($injection) {
                    if (isset($seed2->_DIContainerTrait)) {
                        $seed2->setDefaults($injection);
                    } else {
                        throw new Exception([
                            'factory() requested to inject some properties into existing object that does not use \atk4\core\DIContainerTrait',
                            'object' => $seed2,
                            'injection' => $seed,
                        ]);
                    }
                }
            }

            return $seed2;
        }

        if (!is_array($seed)) {
            $seed = [$seed];
        }

        if (!is_array($seed2)) {
            $seed2 = [$seed2];
        }

        // merge seeds but prefer seed over seed2
        // move numerical keys to the beginning and sort them
        $res = [];
        $res2 = [];
        foreach ($seed as $k => $v) {
            if (is_numeric($k)) {
                $res[$k] = $v;
            } elseif ($v !== null) {
                $res2[$k] = $v;
            }
        }
        foreach ($seed2 as $k => $v) {
            if (is_numeric($k)) {
                if (!isset($res[$k])) {
                    $res[$k] = $v;
                }
            } elseif ($v !== null) {
                if (!isset($res2[$k])) {
                    $res2[$k] = $v;
                }
            }
        }
        ksort($res, SORT_NUMERIC);
        $res = $res + $res2;

        return $res;
    }

    /**
     * Given a Seed (see doc) as a first argument, will create object of a corresponding
     * class, call constructor with numerical arguments of a seed and inject key/value
     * arguments.
     *
     * Argument $defaults has the same effect as the seed, but will not contain the class.
     * Class is always determined by seed, except if you pass object into defaults.
     *
     * To learn more about mechanics of factory trait, see documentation
     *
     * @param mixed  $seed
     * @param array  $defaults
     * @param string $prefix   Optional prefix for class name
     */
    public function factory($seed, $defaults = [], string $prefix = null): object
    {
        if ($defaults === null) {
            $defaults = [];
        }

        if (!$seed) {
            $seed = [];
        }

        if (!is_array($seed)) {
            $seed = [$seed];
        }

        if (is_array($defaults)) {
            array_unshift($defaults, null); // insert argument 0
        } elseif (!is_object($defaults)) {
            $defaults = [null, $defaults];
        }
        $seed = $this->mergeSeeds($seed, $defaults);

        if (is_object($seed)) {
            // setDefaults already called
            return $seed;
        }

        $arguments = array_filter($seed, 'is_numeric', ARRAY_FILTER_USE_KEY); // with numeric keys
        $injection = array_diff_key($seed, $arguments); // with string keys
        $object = array_shift($arguments); // first numeric key argument is object

        if (!is_object($object)) {
            $class = is_string($object) ? $this->normalizeClassName($object, $prefix) : '';

            if (!$class) {
                throw new Exception([
                    'Class name was not specified by the seed',
                    'seed' => $seed,
                ]);
            }

            $object = new $class(...$arguments);
        }

        if ($injection) {
            if (isset($object->_DIContainerTrait)) {
                $object->setDefaults($injection);
            } else {
                throw new Exception([
                    'factory() could not inject properties into new object. It does not use \atk4\core\DIContainerTrait',
                    'object' => $object,
                    'seed' => $seed,
                    'injection' => $injection,
                ]);
            }
        }

        return $object;
    }

    /**
     * First normalize class name, then add specified prefix to
     * class name. Finally if $app is defined, and has method
     * `normalizeClassNameApp` it will also get a chance to
     * add prefix.
     *
     * Rules observed, in order:
     *  - If class starts with ".\" then prefixing is always done.
     *  - If class contains "\" or it is an anonymous class prefixing is never done.
     *  - If class (with prefix) exists, do prefix.
     *  - don't prefix otherwise.
     *
     * Leading backslash is removed if presented. (canonical class name does not have a leading backslash)
     *
     * Example: normalizeClassName('User')                    -> 'User'
     * Example: normalizeClassName('User', 'Model')           -> 'Model\User'
     * Example: normalizeClassName('.\User', 'Model')         -> 'Model\User'
     * Example: normalizeClassName(User::class, 'Model')      -> 'Model\User'
     * Example: normalizeClassName(Test\User::class, 'Model') -> 'Test\User'
     *
     * @param string $name   Name of class
     * @param string $prefix Optional prefix for class name
     *
     * @return string Full, normalized class name
     */
    public function normalizeClassName(string $name, string $prefix = null): string
    {
        // compatibility: if App has "normalizeClassNameApp" (obsolete now), use it instead
        if (
            isset($this->_appScopeTrait, $this->app)
            && method_exists($this->app, 'normalizeClassNameApp')
        ) {
            $result = $this->app->normalizeClassNameApp($name, $prefix);
            if ($result !== null) {
                return $result;
            }
        }

        if ($prefix !== null && (substr($prefix, 0, 1) === '\\' || substr($prefix, -1) === '\\')) {
            throw new Exception('Class prefix must not start/end with backslash');
        }

        if (strpos($name, '\\') === 0) { // forced absolute path, remove leading backslash
            $name = substr($name, 1);
        } elseif (strpos($name, '.\\') === 0 && $prefix) { // forced relative path
            $name = $prefix . substr($name, 1);
        } elseif (strpos($name, '\\') === false && strpos($name, 'class@anonymous') !== 0 // path without NS
            && $name && $prefix && class_exists($prefix . '\\' . $name)) { // existing within the prefix NS
            $name = $prefix . '\\' . $name;
        }

        return $name;
    }
}
