<?php

class CtypePunct
{
    /**
     * 检测可打印的字符是不是不包含空白、数字和字母
     * ctype_punct ( string $text ) : bool
     * 检查提供的 string 和 text 里面的字符是不是都是标点符号
     * @param $strings
     */
    public function CtypePunctLearn($strings)
    {
        foreach ($strings as $testcase) {
            if (ctype_punct($testcase)) {
                echo "The string $testcase consists of all punctuation. \n";
            } else {
                echo "The string $testcase does not consist of all punctuation. \n";
            }
        }
    }
}

$strings = array('ABasdk!@!$#', '!@#$', '*&$()');
$CtypePunctExample = new CtypePunct();
$CtypePunctExample->CtypePunctLearn($strings);

// 输出:
// The string ABasdk!@!$# doees not consist of all punctuation.
// The string !@#$ consists of all punctuation.
// The string *&$() consists of all punctuation.