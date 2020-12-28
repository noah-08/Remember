<?php


class InArray
{
    /**
     * 检查数组中是否存在某个值,区分大小写
     * in_array ( mixed $needle , array $haystack [, bool $strict = false ] ) : bool
     * @param $array array 目标数组
     */
    public function InArrayLearn($array)
    {
        var_dump(in_array("Irix", $array)); // 输出bool(true)

        var_dump(in_array("mac", $array)); // 输出bool(false)
    }
}

$array = array("Mac", "NT", "Irix", "Linux");
$InArrayExample = new InArray();
$InArrayExample->InArrayLearn($array);