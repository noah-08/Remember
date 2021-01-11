<?php

function cmp($a, $b)
{
    if($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3,2,5,6,1,4);

usort($a,"cmp");

foreach ($a as $key => $val) {
    echo "$key => $val \n"; // 输出: 0 => 1 1 => 2 2 => 3 3 => 4 4 => 5 5 => 6
}