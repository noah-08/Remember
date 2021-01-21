<?php

class Floor
{

    /**
     * 舍去法取整 返回不大于 value 的最接近的整数,舍去小数部分取整
     * floor ( float $value ) : float
     * @param $value float 要处理的参数
     */
    public function FloorLearn($value)
    {
        echo floor($value);
        echo PHP_EOL;
    }
}

$value = array(1.8,2.9,-5.6);
$FloorExample = new Floor();
$FloorExample->FloorLearn($value[0]); // 输出: 1
$FloorExample->FloorLearn($value[1]); // 输出: 2
$FloorExample->FloorLearn($value[2]); // 输出: -6