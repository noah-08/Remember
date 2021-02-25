<?php


class CtypePrint
{
    /**
     * 做可打印字符检测 检查提供的 string 和 text 里面的字符是不是都是可以打印出来。
     * ctype_print ( string $text ) : bool
     * @param $strings string 需要被检测的字符串
     */
    public function CtypePrintLearn($strings)
    {
        foreach ($strings as $name => $testcase) {
            if (ctype_print($testcase)) {
                echo "The string '$name' consists of all printable characters. \n";
            } else {
                echo "The string '$name' does not consist of all printable characters. \n";
            }
        }
    }
}

$strings = array('string1' => "asdf\n\r\t", 'string2' => 'arf12', 'string3' => 'LKA#@%.54');
$CtypePrintExample = new CtypePrint();
$CtypePrintExample->CtypePrintLearn($strings);

// 输出:
// The string 'string1' does not consist of all printable characters.
// The string 'string2' consists of all printable characters.
// The string 'string3' consists of all printable characters.