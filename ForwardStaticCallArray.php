<?php

class A
{
    const NAME = 'A';
    public static function test() {
        $args = func_get_args();
        echo static::NAME, "" .join(',', $args)." \n";
    }
}

class B extends A
{
    const NAME = "B";

    public static function test() {
        echo self::NAME, "\n";
        // 调用静态方法并将参数作为数组传递
        // forward_static_call_array ( callable $function , array $parameters ) : mixed
        forward_static_call_array(array('A','test'), array('more','args'));
        forward_static_call_array('test', array('other', 'args'));
    }
}

B::test('foo');

// join: implode 的别名
function test() {
    $args = func_get_args();
    echo "C ".join(',',$args)." \n";
}

// 输出：
// B
// B more,args
// C other,args