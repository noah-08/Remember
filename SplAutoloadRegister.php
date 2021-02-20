<?php
    // 注册给定的函数作为 __autoload 的实现
    // spl_autoload_register ([ callable $autoload_function [, bool $throw = true [, bool $prepend = false ]]] ) : bool
    // 因为 __autoload() 在一个进程中只能定义它一次。当我们在进行项目合并的时候,如果出现多个 autoload() 需要将其合并为一个函数。那么，出现了 spl_autoload_register()。

    // index.php
    function autoload_test($class) {
        $file = $class . '.php';
        require_once $file;
    }
    spl_autoload_register("autoload_test");
    $test = new test();

    // test.php
    class test {
        public function __construct() {
            echo "this is test";
        }
    }

    // 使用此函数可以生成一个 __autoload() 队列, 可以注册多个函数。

    // index.php
    function autoload_test($class) {
        $file = $class . '.php';
        require_once $file;
    }

    function autoload_vos($class) {
        $file = $class . '.php';
        require_once $file;
    }

    spl_autoload_register("autoload_test");
    spl_autoload_register('autoload_vos');

    $test = new test();
?>