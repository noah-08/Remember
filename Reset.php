<?php


class Reset
{

    /**
     * 将数组的内部指针指向第一个单元
     * reset ( array &$array ) : mixed
     * @param $array array 目标数组
     */
    public function ResetLearn($array)
    {
        echo current($array)."\n"; // 输出: banana
        next($array);
        next($array);
        echo current($array)."\n"; // 输出: orange

        reset($array);
        echo current($array);      // 输出: banana
    }
}

$array = array('banana','apple','orange');
$ResetExample = new Reset();
$ResetExample->ResetLearn($array);