<?php

class Ceil
{
    /**
     * 进一法取整 返回不小于 value 的下个整数, value 如果有小数点部分则进一位
     * ceil ( float $value ) : float
     * @param $value float 要处理的参数
     */
    public function CeilLearn($value)
    {
        echo ceil($value);
        echo PHP_EOL;
    }
}

$value = array(1.2,3.4,5.6);
$CeilExample = new Ceil();
$CeilExample->CeilLearn($value[0]); // 输出 2
$CeilExample->CeilLearn($value[1]); // 输出 4
$CeilExample->CeilLearn($value[2]); // 输出 6
