<?php

/**
 * 返回对象或类的父类名
 * get_parent_class (mixed $obj = ?) : string
 */
class dad
{
    function dad()
    {
        // implements some logic
    }
}

class child extends dad
{
    function child()
    {
        echo "I'm ", get_parent_class($this), "'s son\n";
    }
}

class child2 extends dad
{
    function child2()
    {
        echo "I'm ", get_parent_class('child2'), "'s son too\n";
    }
}

$foo = new child(); // 输出: I'm dad's son
$bar = new child2(); // 输出: I'm dad's son too