<?php


class ArrayPop
{
    /**
     * 弹出数组最后一个单元(出栈), 并将数组 $array 长度减一
     * array_pop ( array &$array ) : mixed
     * @param &$array array 目标数组
     */
    public function ArrayPopLearn($array)
    {
        $data = array_pop($array);
        print_r($data."\n"); // 输出: .NET
        print_r($array); // 输出: Array( [0] => PHP [1] => JAVA [2] => Python [3] => C++ )
    }
}

$array = array('PHP','JAVA','Python','C++','.NET');
$ArrayPopExample = new ArrayPop();
$ArrayPopExample->ArrayPopLearn($array);