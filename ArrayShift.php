<?php


class ArrayShift
{
    /**
     * 将数组开头的单元移出数组
     * array_shift ( array &$array ) : mixed
     * @param $array array 目标数组
     */
    public function ArrayShiftLearn($array)
    {
        $data = array_shift($array);
        print_r($data."\n"); // 输出: .NET
        print_r($array); // 输出: Array( [0] => PHP [1] => JAVA [2] => Python )
    }
}

$array = array(".NET","PHP","JAVA","Python");
$ArrayShiftExample = new ArrayShift();
$ArrayShiftExample->ArrayShiftLearn($array);