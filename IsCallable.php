<?php

function someFunction()
{
}

$functionVariable = 'someFunction';

var_dump(is_callable($functionVariable, false, $callable_name));    //  输出: bool(true)

echo $callable_name,"\n";   //  输出: someFunction

class someClass
{
    function someMethod()
    {
    }
}

$anObject = new someClass();

$methodVariable = array($anObject, 'someMethod');

var_dump(is_callable($methodVariable, true, $callable_name));   // 输出: bool(true)

echo $callable_name, "\n";  //  输出: someClass:someMethod