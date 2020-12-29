<?php


class StrRepeat
{

    /**
     * 重复一个字符串
     * str_repeat ( string $input , int $multiplier ) : string
     * @param $input string 待操作的字符串
     * @param $count int    需要被重复的次数
     * @return string
     */
    public function StrRepeatLearn($input, $count)
    {
        return str_repeat($input, $count);
    }
}

$StrRepeatExample = new StrRepeat();
echo $StrRepeatExample->StrRepeatLearn('Hello', 5); // 输出 HelloHelloHelloHelloHello