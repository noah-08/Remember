<?php


class End
{
    /**
     * 将数组的内部指针指向最后一个单元
     * end ( array &$array ) : mixed
     * @param $array array
     */
    public function EndLearn($array)
    {
        echo end($array); // 输出: orange
    }
}

$array = array('apple','banana','orange');
$EndExample = new End();
$EndExample->EndLearn($array);