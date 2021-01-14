<?php


class Strpbrk
{

    /**
     * 在字符串中查找一组字符的任何一个字符
     * strpbrk ( string $haystack , string $char_list ) : string
     * @param $string string
     */
    public function StrpbrkLearn($string)
    {
        echo strpbrk($string, 'mi'); // 输出: is is a Simple text. 因为 'i' 先被匹配
        echo "\n";
        echo strpbrk($string, 'S'); // 输出: Simple text. 因为字符区分大小写
    }

}

$string = 'This is a Simple text.';
$StrpbrkExample = new Strpbrk();
$StrpbrkExample->StrpbrkLearn($string);