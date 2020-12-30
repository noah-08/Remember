<?php


class SubStr
{
    /**
     * 返回字符串的子串
     * substr ( string $string , int $start [, int $length ] ) : string
     * @param $string string    目标字符串 至少有一个字符串
     * @param $start  int       从某个位置开始取,负数即从结尾开始取
     * @param $length int       取几位
     */
    public function SubStrLearn($string, $start, $length = 1)
    {
        var_dump(substr($string, $start, $length))."\n";
    }
}

$string = 'PHPFunction';
$SubStrExample = new SubStr();
$SubStrExample->SubStrLearn($string, -1);   // 输出: string(1) "n"
$SubStrExample->SubStrLearn($string, -2);   // 输出: string(1) "o"
$SubStrExample->SubStrLearn($string, -8,8); // 输出 string(8) Function