<?php

class Exp
{

    /**
     * 计算 e 的指数 返回 e 的 value 次方值
     * @param $value float
     */
    public function ExpLearn($value)
    {
        echo exp($value);
    }

}

$value = 5.7;
$ExpExample = new Exp();
$ExpExample->ExpLearn($value); // 输出: 298.86740096706