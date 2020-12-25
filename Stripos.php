<?php
class Stripos
{
    /**
     * 查找字符串首次出现的位置 (区分大小写) 返回值为字符串所在下标位置
     * stripos ( string $haystack , mixed $needle [, int $offset = 0 ] ) : int
     * @param $string string 目标字符串
     * @param $tag  mixed    需要查找的字符
     * @param $start int     从第 $start 个位置开始查找
     */
    public function StriposLearn($string, $tag)
    {
        echo strpos($string, $tag); // 结果: 7
        echo "\n";
        echo stripos($string, $tag, 8); // 从第 8 个位置开始查找
                                              // 结果: 19
    }
}

$StriposExample = new Stripos();
$StriposExample->StriposLearn('I love PHP, I love php too!', 'PHP');