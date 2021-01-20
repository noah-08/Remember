<?php
// 返回参数列表的某一项
// func_get_arg ( int $arg_num ) : mixed

function foo()
{
    $numargs = func_num_args();

    echo "Number of arguments: $numargs \n"; // 输出 Number of arguments: 3

    if ($numargs >= 2) {
        echo "Second argument is: ". func_get_arg(1) . "\n"; // 输出 Second argument is: 2
    }
}

foo(1, 2, 3);