<?php

/**
 * 获取变量的整数值
 * intval ( mixed $value, int $base = 10 ) : int
 * 通过使用指定的进制 base 转换 (默认是十进制),返回变量 value 的 int 数值。 intval() 不能用于 object , 否则会产生 E_NOTICE 错误并返回 1
 */
echo intval(42);                      // 42
echo intval(4.2);                     // 4
echo intval('42');                    // 42
echo intval('+42');                   // 42
echo intval('-42');                   // -42
echo intval(042);                     // 34
echo intval('042');                   // 42
echo intval(1e10);                    // 1410065408
echo intval('1e10');                  // 1
echo intval(0x1A);                    // 26
echo intval(42000000);                // 42000000
echo intval(420000000000000000000);   // 0
echo intval('420000000000000000000'); // 2147483647
echo intval(42, 8);                   // 42
echo intval('42', 8);                 // 34
echo intval(array());                 // 0
echo intval(array('foo', 'bar'));     // 1