<?php

/**
 * 做控制字符检测
 * ctype_cntrl ( string $text ) : bool
 * 如果在当前的语言环境下 text 里面的每个字符都是控制字符,就返回 TRUE; 反之就返回 FALSE
 * 控制字符就是列如: 换行、缩进、空格
 */
$strings = array('string1' => '\n\r\t', 'string2' => 'arf12');
foreach ($strings as $name => $testcase) {
    if (ctype_cntrl($testcase)) {
        echo "The string '$name' consists of all control characters.\n";
    } else {
        echo "The string '$name' does not consist of all control characters.\n";
    }
}

// 输出:
// The string 'string1' consists of all control characters.
// The string 'string2' does not consist of all control characters.