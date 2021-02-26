<?php

/**
 * 获取变量的浮点值
 * floatval (mixed $var ) : float
 * 返回变量 var 的 float 数值
 */

$var = '122.34343The';
$float_value_of_var = floatval($var);
var_dump($float_value_of_var);  // 输出: float(122.34343)