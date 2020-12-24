<?php
class Strrpos
{
    /**
     * 计算指定字符串在目标字符串中最后一次出现的位置 返回值为字符串所在下标位置
     * strrpos ( string $haystack , string $needle [, int $offset = 0 ] ) : int
     * @param $string string
     * @param $tag string
     * @param $start int 从第 $start 个位置开始查找
     */
    public function StrrposLearn($string, $tag)
    {
        var_dump(strrpos($string, $tag, $start = -5));  // 从尾部第 5 个位置开始查找
                                                        // 结果: int(17)

        var_dump(strrpos($string, $tag, $start = 20));  // 从第 20 个位置开始查找
                                                        // 结果: int(27)

        var_dump(strrpos($string, $tag, $start = 28));  // 从第 28 个位置开始查找
                                                        // 结果: bool(false);
    }
}

$strrposLearn = new Strrpos();
$strrposLearn->StrrposLearn('0123456789a123456789b123456789c','7');
