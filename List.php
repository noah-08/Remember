<?php

$info = array('coffee', 'brown', 'caffeine');

// 列出所有变量
list($drink, $color, $power) = $info;

echo "$drink is $color and $power makes it special. \n"; // coffee is brown and caffeine makes it special.


// 列出他们的其中一个
list($drink, ,$power) = $info;
echo "$drink has $power.\n"; // coffee has caffeine.

// 或者让我们跳到仅第三个
list( , , $power) = $info;
echo "I need $power!\n"; // I need caffeine !

// list() 不能对字符串起作用
list($bar) = "abcde";
var_dump($bar); // NULL