<?php


class Shuffle
{
    /**
     * 打乱数组
     * shuffle ( array &$array ) : bool
     * @param $arrays array 目标数组
     */
    public function ShuffleLearn($arrays)
    {
        shuffle($arrays);
        var_dump( array_values($arrays)); // 输出类似: array(5) { [0]=> int(1) [1]=> int(4) [2]=> int(5) [3]=> int(2) [4]=> int(3) }
    }
}

$arrays = range(1, 5);
$ShuffleExample = new Shuffle();
$ShuffleExample->ShuffleLearn($arrays);
