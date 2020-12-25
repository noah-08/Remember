<?php


class Iconv
{
    /**
     * 字符串按要求的字符编码来转换,将字符串 string 从 inCharset 转换编码到 outCharset.
     * iconv ( string $in_charset , string $out_charset , string $str ) : string
     * $in_charset string 输入的字符集。
     * $out_charset   string 输出的字符集。
     * $string    string 要转换的字符串。
     */
    public function IconvLearn()
    {
        echo "Original : This is the Euro symbol '€'.", PHP_EOL;

        //  如果在 $outChar 后添加了字符串 //TRANSLIT(transliteration) 将启用转写功能
        //  意思是当一个字符不能被目标字符集所表示时,它可以通过一个或者多个形似的字符来近似表达.
        // 输出: TRANSLIT : This is the Euro symbol 'EUR'
        echo 'TRANSLIT  :', iconv("UTF-8","ISO-8859-1//TRANSLIT","This is the Euro symbol '€'."), PHP_EOL;

        // 如果在 $outChar 后添加了字符串 //IGNORE 不能以目标字符集表达的字符将被丢弃. 否则会导致一个 E_NOTICE 并返回 false
        // 输出: IGNORE  : This is the Euro symbol ''.
        echo 'IGNORE    :', iconv("UTF-8","ISO-8859-1//IGNORE","This is the Euro symbol '€'."), PHP_EOL;

        // 输出: Plain: Notice: iconv(): Detected an illegal character in input string in .\iconv-example.php on line
        echo 'Plain     :', iconv("UTF-8","ISO-8859-1","This is the Euro symbol '€'."), PHP_EOL;
    }
}

$IconvExample = new Iconv();

$IconvExample->IconvLearn();