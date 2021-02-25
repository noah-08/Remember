<?php

class CtypeUpper
{
    /**
     * 做大写字母检测 检查 string 和 text 里面的字符是不是都是大写字母
     * ctype_upper ( string $text ) : bool
     * @param $strings string 需要检测的字符串
     */
    public function CtypeUpperLearn($strings)
    {
        foreach ($strings as $testcase) {
            if (ctype_upper($testcase)) {
                echo "The string $testcase consists of all uppercase letters. \n";
            } else {
                echo "The string $testcase does not consist of all uppercase letters. \n";
            }
        }
    }
}

$strings = array('AKLWC139', 'LMNSDO', 'akwSKWsm');
$CtypeUpperExample = new CtypeUpper();
$CtypeUpperExample->CtypeUpperLearn($strings);

// 输出:
// The string AKLWC139 does not consist of all uppercase letters.
// The string LMNSDO consists of all uppercase letters.
// The string akwSKWsm does not consist of all uppercase letters.