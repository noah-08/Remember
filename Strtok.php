<?php

$string = "This is\tan example\nstring";

$tok = strtok($string, "\n\t");

while ($tok !== false) {
    echo "Word=$tok";   // 输出: word = This isWord = an exampleWorld=string
    $tok = strtok("\n\t");
}

$first_token = strtok('/something','/');
echo "\n";
$second_token = strtok('/');

var_dump($first_token, $second_token);  // 输出: bool(false)