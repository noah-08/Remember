<?php

// 自 PHP 7.2.0 开始已废弃
// __autoload (string $class) : void


// index.php
function __autoload($class)
{
    $file = $class . '.php';
    require_once $file;
}

$test = new test();

// test.php
class test
{
    public function __construct()
    {
        echo 'this is test';
    }
}

// 当在 index.php 中初始化 test 时,因为找不到对应类,就会调用 __autoload() 引入对应文件