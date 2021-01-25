<?php

// 说明: max ( array $values ) : mixed、max ( mixed $value1 , mixed $value2 [, mixed $... ] ) : mixed
// 如果仅有一个参数且为数组, max() 返回该数组中最大的值. 如果第一个参数是整数、字符串或浮点数,则至少需要两个参数而 max() 会返回这些值中最大的一个。可以比较无限多个值。

echo max(1,3,5,6,7).PHP_EOL;    // 7
echo max(array(2,4,5)).PHP_EOL; // 5


// 当 hello 被转换为整数时转化为了 0, 两个值相等
echo max(0,'hello').PHP_EOL;

// hello 的长度要比 0 长, 所以输出 hello
echo max('hello', 0).PHP_EOL;

echo max('42',3).PHP_EOL;

echo max(-1,'hello').PHP_EOL;

$val = max(array(2,2,2),array(1,1,1,1)).PHP_EOL;

$val = max(array(2,4,8),array(2,5,7)).PHP_EOL;

$val = max('string',array(2,5,7),42).PHP_EOL;