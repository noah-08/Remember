<?php

function foobar($arg, $arg2)
{
    echo __FUNCTION__," got $arg and $arg2\n";
}


class CallUserFuncArrayLearn {
    function bar($arg, $arg2) {
        echo __METHOD__," got $arg and $arg2\n";
    }
}

// call_user_func_array 调用回调函数,并把一个数组参数作为回调函数的参数
// call_user_func_array ( callable $callback , array $param_arr ) : mixed

// Call the foobar() function with 2 arguments
call_user_func_array("foobar", array('1', '2')); // 输出: foobar got 1 and 2

// Call the $fCallUserFuncArray->bar() method with 2 arguments
$CallUserFuncArrayExample = new CallUserFuncArrayLearn();
call_user_func_array(array($CallUserFuncArrayExample, "bar"), array("3", "4")); // 输出: CallUserFuncArrayLearn::bar or got 3 and 4