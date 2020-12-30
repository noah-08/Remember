<?php


class Implode
{
    /**
     * 将一个一维数组的值转化为字符串
     * implode ( string $glue , array $pieces ) : string
     * @param $string string    默认为空的字符串
     * @param $array array      目标数组
     */
    public function ImplodeLearn($string, $array)
    {
        echo implode($string, $array)."\n";     // 输出: lastname,email,phone

        // 当数组为空时 返回为 string 类型的 ""
        var_dump(implode($string, array()));    // 输出: string(0) ""
    }
}

$array = array('lastname', 'email', 'phone');
$ImplodeExample = new Implode();
$ImplodeExample->ImplodeLearn(",", $array);