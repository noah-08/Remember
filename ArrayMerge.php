<?php


class ArrayMerge
{
    /**
     * 待改进
     * 合并一个或多个数组,返回合并后的结果数组,如果参数为空,则返回空 array.
     * 如果数组中有相同的字符串键名, 则该键名后面的值覆盖前面的值.
     * array_merge ([ array $... ] ) : array
     * @param $arrays1 array
     * @param $arrays2 array
     */
    public function ArrayMergeLearn($arrays1, $arrays2)
    {
        $result = array_merge($arrays1, $arrays2);
        print_r($result); // 输出 array([color] => red, [0] => 6, [shape] => trapezoid, [1] => 6)
    }
}

$ArrayMergeExample = new ArrayMerge();
$ArrayMergeExample->ArrayMergeLearn(array("color" => "red", 6), array("color" => "red", "shape" => "trapezoid", 6));