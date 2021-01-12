<?php


class StrToUpper
{

    /**
     * 将目标字符串转化为大写
     * strtoupper ( string $string ) : string
     * @param $text string 目标字符串
     */
    public function StrToUpperLearn($text)
    {
        echo strtoupper($text); // 输出: HELLO WORLD
    }

}

$text = "hello world";
$StrToUserExample = new StrToUpper();
$StrToUserExample->StrToUpperLearn($text);
