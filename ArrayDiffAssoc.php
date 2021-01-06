<?php


class ArrayDiffAssoc
{
    /**
     * 带索引计算数组的差异
     * array_diff_assoc ( array $array1 , array $array2 , array $... = ? ) : array
     * @param $array1 array 从这个数组进行比较
     * @param $arrays array 更多被比较的数组
     */
    public function ArrayDiffAssocLearn($array1, $arrays)
    {
        // 这里输出了red,因为第二个数组中的 red 索引与数组一中的 key 不一致,所以有输出
        print_r(array_diff_assoc($array1, $arrays)); // 输出: Array( [b] => brown [c] => blue [0] => red)
    }
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$arrays = array("a" => "green", "yellow", "red");
$ArrayDiffAssocExample = new ArrayDiffAssoc();
$ArrayDiffAssocExample->ArrayDiffAssocLearn($array1, $arrays);