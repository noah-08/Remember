<?php


class Fmod
{

    /**
     * fmod ( float $x , float $y ) : float
     * 返回除法的浮点数余数
     * 返回被除数 (x) 除以除数 (y) 所得的浮点数余数。余数(r) 的定义是: x = i * y + r, 其中 i 是整数。如果 y 是非零值，则 r 和 x 的符号相同并且其数量值小于y。
     * @param $x float 被除数
     * @param $y float 除数
     */
    public function FmodLearn($x, $y)
    {
        echo fmod($x,$y);
    }

}

$x = 5.7;
$y = 1.3;
$FmodExample = new Fmod();
$FmodExample->FmodLearn($x, $y); // 输出: 0.5 (4 * 1.3 + 0.5 = 5.7)