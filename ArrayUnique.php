<?php


class ArrayUnique
{
    /**
     * 移除数组中重复的值
     * array_unique ( array $array [, int $sort_flags = SORT_STRING ] ) : array
     * @param $array array 目标数组
     * @param $sortFlags int 排序类型标记
     */
    public function ArrayUniqueLearn($array)
    {
        print_r(array_unique($array)); // 输出: Array([a] => green, [0] => red, [1] => blue )
    }
}

$array = array("a" => "green", "red", "b" => "green", "blue", "red");
$ArrayUniqueExample = new ArrayUnique();
$ArrayUniqueExample->ArrayUniqueLearn($array);
