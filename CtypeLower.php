<?php

class CtypeLower
{
    /**
     * 做小写字符检测,检查提供的 string 和 text 里面的字符是不是都是小写字符是则返回 true
     * ctype_lower ( string $text) : bool
     * @param $strings string 需要被检测的字符
     */
    public function CtypeLowerLearn($strings)
    {
        foreach ($strings as $testcase) {
            if (ctype_lower($testcase)) {
                echo "The string $testcase consists of all lowercase letters.\n";
            } else {
                echo "The string $testcase does not consist of all lowercase letters.\n";
            }
        }
    }
}

$strings = array('aac123', 'qiutoas', 'QASsdks');
$CtypeLowerExample = new CtypeLower();
$CtypeLowerExample->CtypeLowerLearn($strings);

// 输出:
// The string aac123 does not consist of all lowercase letters.
// The string qiutoas consists of all lowercase letters.
// the string QASsdks does not consist of all lowercase letters.