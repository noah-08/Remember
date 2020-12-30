<?php


class StripTags
{
    /**
     * 从字符串中去除 HTML 和 PHP 标记
     * strip_tags ( string $str [, string $allowable_tags ] ) : string
     * @param $string string 目标字符串
     * @param $allowable string 指定不被去除的字符列表
     */
    public function StringTagsLearn($string,$allowable)
    {
        echo strip_tags($string)."\n";   // 输出 Test paragraph.  Other text
        echo strip_tags($string,$allowable); //   <p>Test paragraph. </p> <a href="#Fragment">Other text</a>
    }
}

$string = '<p>Test paragraph. </p> <!-- Comment --> <a href="#Fragment">Other text</a>';
$StripTagsExample = new StripTags();
$StripTagsExample->StringTagsLearn($string,'<p><a>');