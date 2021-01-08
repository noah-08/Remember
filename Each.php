<?php
// PHP 起 7.20 已废弃
$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);

print_r($bar); // Array ( [1] => bob [value] => bob [0] => 0 [key] => 0 )

$fruit = array("a" => 'apple', "b" => "banana", "c" => "cranberry");

reset($fruit);

while (list($key, $val) = each($fruit)) {
    echo "$key => $val \n"; // 输出: a => apple b => banana c => cranberry
}