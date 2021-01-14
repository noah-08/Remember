<?php


class Strlen
{
    /**
     * 获取字符长度
     * strlen ( string $string ) : int
     * @param $string string 目标字符串
     */
    public function StrlenLearn($string)
    {
        echo strlen($string);   // 输出: 13
    }
}

$String = 'a b c d e f g';
$StrlenExample = new Strlen();
$StrlenExample->StrlenLearn($String);