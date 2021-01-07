<?php

$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

// 说明：array_walk_recursive ( array &$array , callable $callback [, mixed $userdata = NULL ] ) : bool
function test_print($item, $key)
{
    echo "$key holds $item \n";
}

// 注意上例中的键 'sweet' 并没有显示出来。任何其值为 array 的键都不会被传递到回调函数中去.
array_walk_recursive($fruits, 'test_print'); // 输出: "a holds apple"、"b holds banana"、"sour holds lemon"