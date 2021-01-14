<?php

// 执行匹配正则表达式
// preg_match ( string $pattern , string $subject , array &$matches = ? , int $flags = 0 , int $offset = 0 ) : int
$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, substr($subject,3), $matches, PREG_OFFSET_CAPTURE);
print_r($matches); // 输出: Array( [0] => Array ( [0] => def [1] => 0 ))
