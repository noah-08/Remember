<?php
class Strrchr
{
    /**
     * 查找指定字符在字符串中的最后一次出现 返回值为查找到的 $tag 之后的所有字符
     * strrchr ( string $haystack , mixed $needle ) : string
     * @param $string string 目标字符串
     * @param $tag  mixed 查找的字符
     */
    public function StrrchrLearn($string, $tag)
    {
        echo strrchr($string, $tag); // 输出World!
    }
}

$strrchrLearn = new Strrchr();
echo $strrchrLearn->StrrchrLearn('Hello World!','World');
