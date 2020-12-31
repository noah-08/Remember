<?php


class ArrayDiff
{
    /**
     * 计算数组的差集 注意键名保留不变,保留数组 $array 里的键。
     * array_diff ( array $array , array ...$arrays ) : array
     * @param $array array 要被对比的数组
     * @param $arrays array 和更多的数组对比
     */
    public function ArrayDiffLearn($array,$arrays)
    {
        var_dump(array_diff($array, $arrays)); // array(1) {[1] => string(4) "blue"}
    }
}
$array = array("a" => "green", "red", "blue", "red");
$arrays = array("b" => "green", "yellow", "red");
$ArrayDiffExample = new ArrayDiff();
$ArrayDiffExample->ArrayDiffLearn($array, $arrays);