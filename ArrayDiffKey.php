<?php


class ArrayDiffKey
{

    /**
     * 使用键名比较数组的差异
     * array_diff_key ( array $array1 , array $array2 , array $... = ? ) : array
     * @param $array1 array 从这个数组开始比较
     * @param $arrays array 针对此数组进行比较
     */
    public function ArrayDiffKeyLearn($array1, $arrays)
    {

        print_r(array_diff_key($array1, $arrays)); // 输出: Array( [red] => 2, [purple] => 4 )
    }

}

$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$arrays = array('green' => 5, 'blue' => 6, 'yellow', 'cyan' => 8);
$ArrayDiffKeyExample = new ArrayDiffKey();
$ArrayDiffKeyExample->ArrayDiffKeyLearn($array1, $arrays);