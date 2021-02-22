<?php

/**
 * GetClass 返回对象的类名
 * get_class ([ object $object = NULL ] ) : string
 */

class GetClass
{
    function name()
    {
        echo "My Class name is ", get_class($this),"\n";
    }
}

// create an object
$bar = new GetClass();

// external call
echo "Its Class is ",get_class($bar) , "\n"; // Its Class is GetClass

// internal call
$bar->name(); // 输出: My Class name is GetClass