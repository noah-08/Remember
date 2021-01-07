<?php


class Asort
{
    /**
     * 对数组进行排序并保持索引关系
     * asort ( array &$array , int $sort_flags = SORT_REGULAR ) : bool
     * @param $array array 目标数组
     */
    public function AsortLearn($array)
    {
        asort($array);
        foreach ($array as $key => $val) {
            echo "$key = $val \n"; // c = apple b = banana d = lemon a = orange
        }
    }

}

$array = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

$AsortExample = new Asort();
$AsortExample->AsortLearn($array);