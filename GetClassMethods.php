<?php

class GetClassMethods
{

    // constructor (构造函数)
    public function index()
    {
        return(true);
    }

    public function myFunc1()
    {
        return(true);
    }

    public function myFunc2()
    {
        return(true);
    }
}

/**
 * 返回由类的方法名组成的数组
 * get_class_methods (mixed $class_name) : array
 */
$class_methods = get_class_methods('GetClassMethods');
// or
$class_methods = get_class_methods(new GetClassMethods());

foreach ($class_methods as $method_name) {
    echo "$method_name\n";
}

var_dump($class_methods);
