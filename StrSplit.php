<?php


class StrSplit
{

    /**
     * 将字符串分割成数组
     * str_split ( string $string [, int $split_length = 1 ] ) : array
     * @param $string string 目标字符串
     * @param $split  int   每一段的长度
     */
    public function StrSplitLearn($string)
    {
        var_dump( str_split($string)); // 输出 array(5) { [0]=> string(1) "H" [1]=> string(1) "e" [2]=> string(1) "l" [3]=> string(1) "l" [4]=> string(1) "o" }
        var_dump( str_split($string,3)); // array(2) { [0]=> string(3) "Hel" [1]=> string(2) "lo" }
    }
}

$string = 'Hello';
$StrSplitExample = new StrSplit();
$StrSplitExample->StrSplitLearn($string);
$StrSplitExample->StrSplitLearn($string);