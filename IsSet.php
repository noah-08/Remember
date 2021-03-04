<?php

/**
 * 检测变量是否已设置并且非 NULL
 * isset ( mixed $var, mixed $... = ? ) : bool
 * 如果 var 存在并且值不是 null 则返回 true，否则返回 false
 */

$var = '';

if (isset($var)) {
    echo "This var is set so I will print.\n";  // 输出: This var is set so I will print.
}

$a = "test";
$b = "anothertest";

var_dump(isset($a));    // TRUE
var_dump(isset($a, $b));    // TRUE

unset($a);

var_dump(isset($a));    // FALSE
var_dump(isset($a, $b));    // FALSE

$foo = NULL;
var_dump(isset($foo));  //  FALSE