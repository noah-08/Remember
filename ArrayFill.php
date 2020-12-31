<?php


class ArrayFill
{

    /**
     * 用给定的值填充数组
     * array_fill ( int $start_index , int $num , mixed $value ) : array
     * @param $start int    指定从索引下标开始填充,如果是负数那么第一个索引会是 $start 往后则从 0 开始
     * @param $num  int     填充个数
     * @param $value mixed  用来填充的值
     */
    public function ArrayFillLearn($start, $num, $value)
    {
        var_dump(array_fill($start, $num, $value));
    }
}

$ArrayFillExample = new ArrayFill();
$ArrayFillExample->ArrayFillLearn(6, 3, "banana");  // 输出: array(3) { [6] => string(6) "banana" [7]=> string(6) "banana" [8]=> string(6) "banana" }
$ArrayFillExample->ArrayFillLearn(-2, 3, "pear");   // 输出: array(3) { [-2] => string(4) "pear" [0] => string(4) "pear" [1] => string(4) "pear" }