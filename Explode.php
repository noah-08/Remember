<?php


class Explode
{
    /**
     * 使用一个字符串分割另一个字符串
     * explode ( string $delimiter , string $string [, int $limit ] ) : array
     * @param $delimiter string 分割字符
     * @param $string string    目标字符串
     */
    public function ExplodeLearn($delimiter,$string)
    {
        var_dump(explode($delimiter,$string)); // 输出: array(6) { [0]=> string(6) "param1" [1]=> string(6) "param2" [2]=> string(6) "param3" }
    }
}
$string = "param1 param2 param3";
$ExplodeExample = new Explode();
$ExplodeExample->ExplodeLearn(" ",$string);