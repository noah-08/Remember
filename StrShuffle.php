<?php


class StrShuffle
{
    /**
     * 随机打乱一个字符串
     * str_shuffle ( string $str ) : string
     * @param $string string 目标字符串
     */
    public function StrShuffleLearn($string)
    {
        print_r(str_shuffle($string)); // 输出类似 HPP
    }
}

$StrShuffleExample = new StrShuffle();
$StrShuffleExample->StrShuffleLearn('PHP');