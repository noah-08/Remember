<?php


class StrRev
{
    /**
     * 反转字符串
     * strrev ( string $string ) : string
     * @param $string string 目标字符串
     * @return string
     */
    public function StrRevLearn($string)
    {
        return strrev($string);
    }
}

$string = 'Hello';
$StrRevExample = new StrRev();
echo $StrRevExample->StrRevLearn($string); // 输出 olleH