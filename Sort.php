<?php


class Sort
{

    /**
     * 本函数对数组进行排序。 当本函数结束时数组单元将被从最低到最高重新安排。
     * sort ( array &$array , int $sort_flags = SORT_REGULAR ) : bool
     * @param $array array 目标数组
     * @param $type  int   排序方式
     * SORT_REGULAR 正常比较单元
     * SORT_NUMERIC 单元被作为数字来比较
     * SORT_STRING 单元被作为支付串来比较
     * SORT_LOCALE_STRING 根据当前的区域 (Locale) 设置来把单元当作字符串比较,可以用 setlocale() 来改变
     * SORT_NATURAL 和 natsort() 类似对每个单元以 "自然的顺序" 对字符串进行排序
     * SORT_FLAG_CASE 能够与 SORT_STRING 或 SORT_NATURAL 合并（OR位运算）,不区分大小写排序字符串
     */
    public function SortLearn($array, $type)
    {
        sort($array);

        foreach ($array as $key => $val) {
            echo "array[". $key ."] = ". $val ."\n"; // 输出: array[0] = Apple array[1] = Banana array[2] = Lemon array[3] = Orange
        }

        $fruits = array(
            "Orange1","Orange2","Orange3","Orange20"
        );

        sort($fruits, $type);

        foreach ($fruits as $key => $val) {
            echo "fruits[" . $key . "] = " . $val . "\n"; // 输出: fruits[0] = Orange1 fruits[1] = Orange2 fruits[2] = Orange3 fruits[3] = Orange20
        }
    }

}


$array = array('Lemon','Orange','Banana','Apple');
$SortExample = new Sort();
$SortExample->SortLearn($array,SORT_NATURAL | SORT_FLAG_CASE);