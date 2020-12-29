<?php


class StrPad
{
    /**
     * 使用另一个字符串填充字符串为指定长度
     * str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] ) : string
     * @param $arguments string 输入字符串
     * @param $position int     填充字符长度,如果是负数,小于或者等于输入字符串的长度.
     * @param $string string    需要填充的字符,如果填充字符长度不能被 $string 整除,那么 string 可能会被缩短
     * @param $type int         默认为 STR_PAD_RIGHT
     * @return string
     */
    public function StrPadLearn($arguments , $position, $string, $type = STR_PAD_RIGHT)
    {

        return str_pad($arguments, $position, $string, $type);
    }
}

$arguments = 'Hello';
$position = 10;
$string = '*';
$StrPadExample = new StrPad();
echo $StrPadExample->StrPadLearn($arguments, $position, $string)."\n";  // 输出 Hello*****
echo $StrPadExample->StrPadLearn($arguments, $position, $string,STR_PAD_LEFT)."\n"; // *****Hello
echo $StrPadExample->StrPadLearn($arguments, $position, $string,STR_PAD_BOTH)."\n"; // 输出 **Hello***
