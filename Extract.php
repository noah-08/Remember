<?php

$size = "large";
$var_array = [
    "color" => "blue",
    "size" => "medium",
    "shape" => "sphere"
];

extract($var_array, EXTR_PREFIX_SAME, "wddx");
echo "$color, $size, $shape, $wddx_size \n"; // 输出: blue large sphere medium