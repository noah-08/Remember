<?php


class Arsort
{
    /**
     * 对数组进行排序并保持索引关系
     * arsort ( array &$array , int $sort_flags = SORT_REGULAR ) : bool
     * @param $array array 目标数组
     */
    public function ArsortLearn($array)
    {
        arsort($array);
        foreach ($array as $key => $val) {
            echo "$key = $val\n"; // 输出: // a = orange d = lemon b = banana c = apple
        }
    }
}

$array = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
$ArsortExample = new Arsort();
$ArsortExample->ArsortLearn($array);