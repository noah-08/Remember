<?php
class Strpos
{
    /**
     * 查找字符串首次出现的位置 (区分大小写) 返回值为字符串所在下标位置
     * strpos ( string $haystack , mixed $needle [, int $offset = 0 ] ) : int
     * @param $string string 目标字符串
     * @param $tag  mixed    需要查找的字符
     * @param $start int     从第 $start 个位置开始查找
     */
    public function StrposLearn($string, $tag)
    {
        echo strpos($string, $tag); // 结果: 7
        echo "\n";
        echo strpos($string, $tag, 8); // 从第 8 个位置开始查找
                                             // 结果: 19
    }
}

$StrposLearn = new Strpos();
$StrposLearn->StrposLearn('I love php, I love php too!', 'php');