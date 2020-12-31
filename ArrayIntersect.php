<?php


class ArrayIntersect
{
    /**
     * 计算数组的相同值
     * array_intersect ( array $array1 , array $array2 [, array $... ] ) : array
     * @param $array    array 要检查的数组,作为主值
     * @param $arrays   array 要被对比的数组列表
     */
    public function ArrayIntersectLearn($array, $arrays)
    {
        var_dump(array_intersect($array, $arrays)); // array(2) { ["a"] => string(5) "green" [1] => string(4) "blue" }
    }
}
$array = array("a" => "green", "red", "blue");
$arrays = array("b" => "green", "yellow", "blue");
$ArrayIntersectExample = new ArrayIntersect();
$ArrayIntersectExample->ArrayIntersectLearn($array, $arrays);