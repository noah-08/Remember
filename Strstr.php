<?php
class Strstr
{
    /**
     * 查找支付串的首次出现.
     * stristr ( string $haystack , mixed $needle [, bool $before_needle = false ] ) : string
     * @param $string string 目标字符串
     * @param $tag mixed    需要查找的字符
     * @param $type bool 值为 FALSE 返回值则为查找到的 $tag 之后的所有字符，值为 TRUE 返回值则为查找到的 $tag 之前的所有字符
     */
    public function StrstrLearn($string, $tag, $type = true)
    {
        $domain = strstr($string, $tag);
        echo $domain; // 输出: @example.com
        echo "\n";
        $user = strstr($string, $tag,$type); // 从 PHP 5.3.0起
        echo $user; // 输出: user
    }
}

$StrstrExample = new Strstr();
echo $StrstrExample->StrstrLearn('name@example.com', '@');