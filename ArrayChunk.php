<?php


class ArrayChunk
{
    /**
     * 将一个数组分割成多个
     * array_chunk ( array $array , int $size [, bool $preserve_keys = false ] ) : array
     * @param $array array   目标数组
     * @param $size  int     以 $size 数量进行分割
     * @param $saveKeys bool 是否保留键值
     */
    public function ArrayChunkLearn($array, $size, $saveKeys = false)
    {
        var_dump(array_chunk($array, $size, $saveKeys));
    }
}

$array = array('a','b','c','d','e');
$ArrayChunkExample = new ArrayChunk();
$ArrayChunkExample->ArrayChunkLearn($array, 2); // 输出: array(3) { [0]=> array(2) { [0] => string(1) "a" [1] => string(1) "b" } [1] => array(2) { [0]=>string(1) "c" [1]=> string(1) "d"} [2]=> array(1) {[0]=>string(1) "e"} }
$ArrayChunkExample->ArrayChunkLearn($array, 2, true); // 输出: array(3) { [0]=> array(2) { [0]=> string(1) "a" [1]=> string(1) "b" } [1]=> array(2) { [2]=> string(1) "c" [3]=> string(1) "d" } [2]=> array(1) { [4]=> string(1) "e" } }
