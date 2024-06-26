==========
Hook Trait
==========

.. php:trait:: HookTrait

Introduction
============

HookTrait adds some methods into your class to registering call-backs that would
be executed by triggering a hook. All hooks are local to the object, so if you
want to have application-wide hook then use `app` property.

Hook Spots
==========

Hook is described by a string identifier which we call hook-spot, which would
normally be expressing desired action with prefixes "before" or "after if
necessary.

Some good examples for hook spots are:

 - beforeSave
 - afterDelete
 - validation

The framework or application would typically execute hooks like this::

    $obj->hook('spot');

You can register multiple call-backs to be executed for the requested `spot`::

    $obj->onHook('spot', function($obj){ echo "Hook 'spot' is called!"; });

Adding callbacks
================

.. php:method:: onHook($spot, $fx = null, array $args = [], int $priority = 5)

Register a call-back method. Calling several times will register multiple
callbacks which will be execute in the order that they were added.

Short way to describe callback method
=====================================

There is a concise syntax for using $fx by specifying object only.
In case $fx is omitted then $this object is used as $fx.

In this case a method with same name as $spot will be used as callback::

    function init(): void {
        parent::init();

        $this->onHook('beforeUpdate');
    }

    function beforeUpdate($obj){
        // will be called from the hook
    }


Callback execution order
========================

$priority will make hooks execute faster. Default priority is 5, but if you add
hook with priority 1 it will always be executed before any hooks with priority
2, 3, 5 etc.

Normally hooks are executed in the same order as they are added, however if you
use negative priority, then hooks will be executed in reverse order::

    $obj->onHook('spot', third,    [], -1);

    $obj->onHook('spot', second,   [], -5);
    $obj->onHook('spot', first,    [], -5);

    $obj->onHook('spot', fourth,   [], 0);
    $obj->onHook('spot', fifth,    [], 0);

    $obj->onHook('spot', ten,      [], 1000);

    $obj->onHook('spot', sixth,    [], 2);
    $obj->onHook('spot', seventh,  [], 5);
    $obj->onHook('spot', eight);
    $obj->onHook('spot', nine,     [], 5);


.. php:method:: hook($spot, $args = null)

execute all hooks in order. Hooks can also return some values and those values
will be placed in array and returned by hook()::

    $mul = function($obj, $a, $b) {
        return $a*$b;
    };

    $add = function($obj, $a, $b) {
        return $a+$b;
    };

    $obj->onHook('test', $mul);
    $obj->onHook('test', $add);

    $res1 = $obj->hook('test', [2, 2]);
    // res1 = [4, 4]

    $res2 = $obj->hook('test', [3, 3]);
    // res2 = [9, 6]

Arguments
=========

As you see in the code above, we were able to pass some arguments into those
hooks. There are actually 3 sources that are considered for the arguments:

 - first argument to callbacks is always the $object
 - arguments passed as 3rd argument to onHook() are included
 - arguments passed as 2nd argument to hook() are included

You can also use key declarations if you wish to override arguments::

    // continue from above example

    $pow = function($obj, $a, $b, $power) {
        return pow($a, $power)+$pow($b, $power);
    }

    $obj->onHook('test', $pow, [2]);
    $obj->onHook('test', $pow, [7]);

    // execute all 3 hooks
    $res3 = $obj->hook('test', [2, 2]);
    // res3 = [4, 4, 8, 256]

    $res4 = $obj->hook('test', [2, 3]);
    // res3 = [6, 5, 13, 2315]

Breaking Hooks
==============

.. php:method:: breakHook

When this method is called from a call-back then it will cause all other
callbacks to be skipped.

If you pass $return argument then instead of returning all callback return
values in array the $return will be returned by hook() method.

If you do not pass $return value (or specify null) then list of the values
collected so far will be returned

Remember that adding breaking hook with a lower priority can prevent other
call-backs from being executed::


    $obj->onHook('test', function($obj){
        $obj->breakHook("break1");
    });

    $obj->onHook('test', function($obj){
        $obj->breakHook("break2");
    }, [], -5);

    $res3 = $obj->hook('test', [4, 4]);
    // res3 = "break2"

breakHook method is implemented by throwing a special exception that is then
caught inside hook() method.

Using references in hooks
=========================

In some cases you want hook to change certain value. For example when model
value is set it may call normalization hook (methods will change $value)::

    function set($field, $value) {
        $this->hook('normalize', [&$value]);
        $this->data[$field] = $value;
    }

    $m->onHook('normalize', function(&$a) { $a = trim($a); });

Checking if hook has callbacks
==============================

.. php:method:: hookHasCallbacks()

This method will return true if at least one callback has been set for the hook.
