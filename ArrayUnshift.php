<?php


class ArrayUnshift
{
    /**
     * 在数组开头插入一个或多个单元
     * array_unshift ( array &$array , mixed ...$values ) : int
     * @param &$array array 目标数组
     * @param $values mixed 插入的变量
     */
    public function ArrayUnshiftLearn($array, $values)
    {
        $data = array_unshift($array, $values);
        print_r($data."\n"); // 输出: 5
        print_r($array); // 输出: Array( [0] => PHP [1] => C++ [2] => JAVA [3] => C# [4] => .NET)
    }
}
$array = array("C++","JAVA","C#",".NET");
$ArrayUnshiftExample = new ArrayUnshift();
$ArrayUnshiftExample->ArrayUnshiftLearn($array, "PHP");