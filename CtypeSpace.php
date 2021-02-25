<?php

class CtypeSpace
{
    /**
     * 做空白字符检测 检查提供的 string 和 text 里面的字符是否包含空白
     * ctype_space ( string $text ) : bool
     * @param $strings string 需要被检测的字符
     */
    public function CtypeSpaceLearn($strings)
    {
        foreach ($strings as $name => $testcase) {
            if (ctype_space($testcase)) {
                echo "The string '$name' consists of all whitespace characters. \n";
            } else {
                echo "The string '$name' does not consist of all whitespace characters. \n";
            }
        }
    }
}

$strings = array('string1' => "\n\r\t", 'string2' => "\narf12", 'string3' => '\n\r\t');
$CtypeSpaceExample = new CtypeSpace();
$CtypeSpaceExample->CtypeSpaceLearn($strings);

// 输出:
// The string 'string1' consists of all whitespace characters.
// The string 'string2' does not consist of all whitespace characters.
// The string 'string3' does not consist of all whitespace characters.