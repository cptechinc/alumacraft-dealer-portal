<?php

declare(strict_types=1);

namespace atk4\core;

/**
 * A class with this trait will have setDefaults() method that can
 * be passed list of default properties.
 *
 * $view->setDefaults(['ui' => 'segment']);
 *
 * Typically you would want to do that inside your constructor. The
 * default handling of the properties is:
 *
 *  - only apply properties that are defined
 *  - only set property if it's current value is null
 *  - ignore defaults that have null value
 *  - if existing property and default have array, then both arrays will be merged
 *
 * Several classes may opt to extend setDefaults, for example in Agile UI
 * setDefaults is extended to support classes and content:
 *
 * $segment->setDefaults(['Hello There', 'red', 'ui'=>'segment']);
 *
 * WARNING: Do not use this trait unless you have a lot of properties
 * to inject. Also follow the guidelines on
 * https://github.com/atk4/ui/wiki/Object-Constructors
 *
 * Relying on this trait excessively may cause anger management issues to
 * some code reviewers.
 */
trait DIContainerTrait
{
    /**
     * Check this property to see if trait is present in the object.
     *
     * @var bool
     */
    public $_DIContainerTrait = true;

    /**
     * Call from __construct() to initialize the properties allowing
     * developer to pass Dependency Injector Container.
     *
     * @param bool $passively If true, existing non-null argument values will be kept
     *
     * @return $this
     */
    public function setDefaults(array $properties, bool $passively = false)
    {
        foreach ($properties as $key => $val) {
            if (!is_numeric($key) && property_exists($this, $key)) {
                if ($passively && $this->{$key} !== null) {
                    continue;
                }

                if ($val !== null) {
                    $this->{$key} = $val;
                }
            } else {
                $this->setMissingProperty($key, $val);
            }
        }

        return $this;
    }

    /**
     * Sets object property.
     * Throws exception.
     *
     * @param mixed $key
     * @param mixed $value
     * @param bool  $strict
     *
     * @return $this
     */
    protected function setMissingProperty($key, $value)
    {
        // ignore numeric properties by default
        if (is_numeric($key)) {
            return $this;
        }

        throw new Exception([
            'Property for specified object is not defined',
            'object' => $this,
            'property' => $key,
            'value' => $value,
        ]);
    }
}
