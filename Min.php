<?php
// min( array $values ) : mixed、min ( mixed $value1 , mixed $value2 [, mixed $...] ) : mixed
// 如果仅有一个参数且为数组, min() 返回该数组中最小的值。如果给出了两个或更多参数, min() 会返回这些值中最小的一个。
echo min(2,3,1,6,7).PHP_EOL;    // 输出: 1
echo min(array(2,4,5)).PHP_EOL;                      // 输出: 2

echo min(0,'hello').PHP_EOL;           // 输出: 0
echo min('hello', 0).PHP_EOL;          // 输出: hello
echo min('hello', -1).PHP_EOL;         // 输出: -1

// 对多个数组, min 从左向右比较
// 因此在本例中: 2 == 2, 但 4 < 5
$value = min(array(2,4,6,8), array(2,5,1));
var_dump($value).PHP_EOL;   // 输出: array(3) { [0] => int(2) [1] => int(5) [2] => int(1) }

// 如果同时给出数组的非数组作为参数,则不可能返回数组,因为数组被视为最大
$arguments = min('string', array(2,5,7),42);
var_dump($arguments).PHP_EOL;   // 输出: string(6) "string"