<?php

class MtGettrandmax
{
    /**
     * mt_getrandmax (void) : int
     * 返回调用的 mt_rand() 所能返回的最大的随机数
     */
    function randomFloat($min = 0, $max = 1)
    {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }
}

$MtGetrandmaxExample = new MtGettrandmax();
var_dump($MtGetrandmaxExample->randomFloat());  // 输出: float(0.37207944103148)
var_dump($MtGetrandmaxExample->randomFloat(2, 20)); // 输出: float(12.491486617593)