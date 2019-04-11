<?php
/**
 * Magic Methods
 *
 * __sleep => serialize
 * __wakeup =>unserialize
 * __invoke
 * __debugInfo => called when var_dump is called on an object
 * __toString
 * __set
 * __get
 * __isset => called when set is called on property that doesn't exist
 * __unset => called when unset is called on property that doesn't exist
 * __call
 * __callStatic
 */

class Compare
{
    public function __invoke($a, $b)
    {
        return $a === $b;
    }
}

$comp = new Compare();
var_dump($comp(1, 2));
