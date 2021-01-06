<?php


class ArrayCountValues
{

    /**
     * 统计数组中所有的值
     * array_count_values ( array $array ) : array
     * @param $array array 要统计的数组
     */
    public function ArrayCountValuesLearn($array)
    {
        print_r(array_count_values($array)); // 输出 Array( [1] => 2 [hello] => 2 [world] => 1)
    }
}

$array = array(1, 'hello', 1, 'world', 'hello');
$ArrayCountValuesExample = new ArrayCountValues();
$ArrayCountValuesExample->ArrayCountValuesLearn($array);