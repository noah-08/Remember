<?php


class StrToLower
{

    /**
     * 将目标字符串转小写
     * strtolower ( string $string ) : string
     * @param $text string 目标字符串
     */
    public function StrToLowerLearn($text)
    {
        echo strtolower($text); // hello world
    }

}

$text = "HELLO WORLD";
$StrToLowerExample = new StrToLower();
$StrToLowerExample->StrToLowerLearn($text);