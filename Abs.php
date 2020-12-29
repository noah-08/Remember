<?php


class Abs
{
    /**
     * 绝对值
     * abs ( mixed $number ) : number
     * @param $number mixed 需要处理的数字值
     * @return float|int
     */
    public function AbsLearn($number)
    {
        return abs($number);
    }
}

$AbsExample = new Abs();
var_dump($AbsExample->AbsLearn(-6.6))."\n"; // 输出 float(6.6)
var_dump($AbsExample->AbsLearn(5))."\n";    // 输出 int(5)
var_dump($AbsExample->AbsLearn(-5))."\n";   // 输出 int(5)
