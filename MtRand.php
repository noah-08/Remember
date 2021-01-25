<?php
// mt_rand (void) : int、mt_rand ( int $min , int $max ) : int
// 很多老的 libc 的随机数发生器具有一些不确定和未知的特性而且很慢。 PHP 的 rand() 函数默认使用 libc 随机数发生。
// mt_rand() 函数是非正式用来替换它的。该函数用了 >> Mersenne Twister 中已知的特性作为随机数发生器,它可以产生随机数值的平均速度比 libc 提供的 rand() 快四倍.

echo mt_rand() . "\n";  // 38975876
echo mt_rand() . "\n";  // 2075018609

echo mt_rand(5,15);     // 14