<?php

class A
{
    const NAME = 'A';
    public static function test()
    {
        $args = func_get_args();
        echo static::NAME," ".join(',', $args)."\n";
    }
}

class B extends A
{
    const NAME = 'B';
    public static function test()
    {
        echo self::NAME,"\n";
        // 调用静态方法
        // forward_static_call ( callable $function [, mixed $parameter [, mixed $... ]] ) : mixed
        forward_static_call(array('A','test'),'more','args');
        forward_static_call( 'test', 'other', 'args');
    }
}

B::test('foo');

function test() {
    $args = func_get_args();
    echo "C".join(',',$args)."\n";
}

// 输出:
// B
// B more,args
// C other,args