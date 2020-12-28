<?php


class ArrayColumn
{
    /**
     * 返回数组中指定的一列，可以自定义索引值
     * array_column ( array $input , mixed $column_key [, mixed $index_key = null ] ) : array
     * @param $records array 需要取出数组列的多维数组
     * @param $columnKey mixed 需要返回值的指定列
     * @param $indexKey mixed 作为返回数组的索引,它可以是该列的整数索引,或者字符串键值
     */
    public function ArrayColumnLearn($records, $columnKey, $indexKey = '')
    {
        print_r(array_column($records, $columnKey)); // 输出: Array ( [0] => John [1] => Sally [2] => Jane [3] => PeterIsDie )

        print_r(array_column($records, $columnKey, $indexKey)); // 输出: Array ( [a] => John [s] => Sally [b] => Jane [c] => PeterIsDie )
    }
}

$records = array(
    array('id' => '2135', 'first_name' => 'John', 'last_name' => 'Doe'),
    array('id' => '3245', 'first_name' => 'Sally', 'last_name' => 'Smith'),
    array('id' => '5342', 'first_name' => 'Jane', 'last_name' => 'Jones'),
    array('id' => '5623', 'first_name' => 'PeterIsDie', 'last_name' => 'Doe')
);

$ArrayColumnExample = new ArrayColumn();
$ArrayColumnExample->ArrayColumnLearn($records, 'first_name', 'id');
