<?php
// 返回一个包含函数参数列表的数组
// func_get_args (void) : array

function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs \n";
    if ($numargs >= 2) {
        echo "Second argument is: ".func_get_arg(1) ."\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: ". $arg_list[$i] ."\n";
    }
}

foo(1, 2, 3);
// 输出:
// Number of arguments: 3
// Second argument is: 2
// Argument 0 is: 1
// Argument 1 is: 2
// Argument 2 is: 3