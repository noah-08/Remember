<?php


class ArrayValues
{
    /**
     * 返回数组中所有的值,并给其建立数字索引。
     * array_values ( array $array ) : array
     * @param $array array 目标数组
     */
    public function ArrayValuesLearn($array)
    {
        print_r(array_values($array)); // 输出 array([0] => XL, [1] => gold)
    }
}

$array = array("size" => "XL", "color" => "gold");
$ArrayValuesExample = new ArrayValues();
$ArrayValuesExample->ArrayValuesLearn($array);