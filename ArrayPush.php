<?php


class ArrayPush
{
    /**
     * 将一个或多个单元压入数组的末尾（入栈） $array[] = $var;
     * array_push ( array &$array , mixed $value1 , mixed $... = ? ) : int
     * @param &$array array 目标数组
     */
    public function ArrayPushLearn($array)
    {
        $data = array_push($array,"PHP");
        print_r($data."\n"); // 输出: 4
        print_r($array); // Array ( [0] => C++ [1] => JAVA [2] => .NET [3] => PHP )
    }
}

$array = array("C++","JAVA",".NET");
$ArrayPushExample = new ArrayPush();
$ArrayPushExample->ArrayPushLearn($array);