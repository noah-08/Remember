<?php

function CallUserFunc($type)
{
    echo "You wanted a $type haircut, no problem\n";
}

// 把第一个参数作为回调函数调用
// call_user_func ( callable $callback , mixed $parameter = ? , mixed $... = ? ) : mixed
call_user_func("CallUserFunc","mushroom"); // 输出: You wanted a mushroom haircut, no problem
call_user_func("CallUserFunc","shave"); // 输出: You wanted a shave haircut, no problem