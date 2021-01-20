<?php
// 返回传递给函数的参数个数
// func_num_args ( void ) : int

function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs \n"; // 输出 Number of arguments: 3
}

foo(1, 2, 3);