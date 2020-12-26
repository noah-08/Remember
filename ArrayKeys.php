<?php


class ArrayKeys
{

    /**
     * 返回数组中部分的或所有的键名,并给其建立数字索引。
     * array_keys ( array $array [, mixed $search_value = null [, bool $strict = false ]] ) : array
     * @param $array array 一个数组,包含了要返回的键值
     * @param $end mixed 返回包含这些值的键名
     */
    public function ArrayKeysLearn($array, $end = 0)
    {
        print_r(array_keys($array)); // 输出: Array([0] => 0, [1] => 'blue', [2] => 'color');

        print_r(array_keys($array,"blue")); // 输出: Array([0] => 0);
    }
}

$array = array("blue", "blue" => 100, "color" => array("blue", "red", "green"));
$ArrayKeysExample = new ArrayKeys();
$ArrayKeysExample->ArrayKeysLearn($array);