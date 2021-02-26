<?php

/**
 * 获取变量的字符串值
 * strval( mixed $var ) : string
 * var 可以是任何标量类型 不能将 strval() 用于数组或对象
 */

$foo = strval(123);
var_dump($foo); // 输出 string(3) "123"