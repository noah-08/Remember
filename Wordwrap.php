<?php


class Wordwrap
{
    /**
     * 使用字符串断点将字符串打断为指定数量的字串。
     * wordwrap ( string $str , int $width = 75 , string $break = "\n" , bool $cut = false ) : string
     * @param $string string
     */
    public function WordWrapLearn($string)
    {
        echo wordwrap($string, 1, '、'); // 输出: The、quick、brown、fox、jumped、over、the、the、lazy、dog.
    }

}

$string = 'The quick brown fox jumped over the lazy dog.';
$WordwrapExample = new Wordwrap();
$WordwrapExample->WordWrapLearn($string);