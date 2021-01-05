<?php

    function odd($var)
    {
        // & 按位与
        return ($var & 1);
    }

    function even($var)
    {
        // 返回输入的整数是否为偶数
        return(!($var & 1));
    }

    $array1 = array("a" => 1, "b" => 2, "c" => 3,"d" => 4, "e" => 5);
    $array2 = array(6,7,8,9,10,11,12);
    // array_filter 用回调函数过滤数组中的单元
    // array_filter ( array $array , callable $callback = ? , int $flag = 0 ) : array
    print_r(array_filter($array1, "odd"));
    print_r(array_filter($array2, "even"));