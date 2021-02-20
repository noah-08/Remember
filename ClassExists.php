<?php

class Myclass
{
    public function index()
    {
        return 'test';
    }

}
    // class_exists 检查类是否已定义
    // class_exists (string $class_name, bool $autoload = true ) : bool
    if (class_exists('MyClass')) {
        $myclass = new Myclass();
        echo $myclass->index();
    } else {
        echo 'MyClass 类不存在';
    }

