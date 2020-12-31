<?php

class ArraySlice
{
    /**
     * 从数组中取出一段
     * array_slice ( array $array , int $offset [, int $length = null [, bool $preserve_keys = false ]] ) : array
     * @param $array array      目标数组
     * @param $offset int       从数值中 $offset 开始取值,如果为负数则从末端开始 $offset, $offset 是数组中的位置,不是键值.
     * @param $length int       如果为负数则终止在距离数组末端的 $length 地方
     * @param $saveKeys bool    是否保留原始键值
     */
    public function ArraySliceLearn($array, $offset, $length, $saveKeys = false)
    {
        var_dump(array_slice($array, $offset, $length, $saveKeys));
    }
}

$array = array("a", "b", "c", "d", "e");
$ArraySliceExample = new ArraySlice();
$ArraySliceExample->ArraySliceLearn($array, 0, 3); // 输出: array(3) { [0] => string(1) "a" [1] => string(1) "b" [2] => string(1) "c" }
$ArraySliceExample->ArraySliceLearn($array, -2, 1, true); // 输出: array(1) { [3] => string(1) "d" }