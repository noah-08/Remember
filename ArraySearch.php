<?php


class ArraySearch
{
    /**
     * 在数组中搜索给定的值，如果成功则返回首个相应的键名
     * array_search ( mixed $needle , array $haystack [, bool $strict = false ] ) : mixed
     * @param $needle mixed 搜索的值 
     * @param $array  array 目标数组
     * @param $strict bool 严格模式
     */
    public function ArraySearchLearn($array, $strict = false)
    {
        var_dump(array_search('green', $array)."\n"); // 输出: string(2) "2"

        var_dump(array_search('Red', $array, $strict)."\n"); // 输出: string(1) ""

        var_dump(array_search('white', $array)); // 输出: bool(false)
    }
}

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$ArraySearchExample = new ArraySearch();
$ArraySearchExample->ArraySearchLearn($array, true);