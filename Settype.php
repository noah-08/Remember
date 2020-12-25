<?php


class Settype
{
    /**
     * 设置变量的类型,将变量 var 的类型设置成 type
     * settype ( mixed &$var , string $type ) : bool
     * @param $var mixed 要转换的变量
     * @param $type string 要设置的类型
     */
    public function SettypeLearn($var, $type)
    {
        settype($var, $type);
        var_dump($var); // 输出 7(integer) 数字数字在前才会转换
    }
}

$SettypeExample = new Settype();
$SettypeExample->SettypeLearn('7.4PHP','integer');