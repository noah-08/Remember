<?php


class ArrayCombine
{

    /**
     * 创建一个数组, 用一个数组的值做为其键名,另一个数组的值作为其值 两个数组不同则返回 false
     * array_combine ( array $keys , array $values ) : array
     * @param $keys array 将被作为新数组的键。非法的值将会转换为字符串类型 (string)
     * @param $values array 将被作为 Array 的值
     */
    public function ArrayCombineLearn($keys, $values)
    {
        var_dump(array_combine($keys, $values));
    }

}
$keys = array('green', 'red', 'yellow');
$values = array('banana', 'apple', 'orange');

$ArrayCombineExample = new ArrayCombine();
$ArrayCombineExample->ArrayCombineLearn($keys, $values);