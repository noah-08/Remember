<?php

/**
 * 做可打印字符串检测,空格除外
 * ctype_graph ( string $text ) : bool
 * 如果 text 里面的每个字符都是输出可见的 (没有空白), 就返回 TRUE ; 反之就返回 FALSE;
 */

$strings = array('string1' => "asdf\n\r\t", 'string2' => 'arf12', 'string3' => 'LKA#@%.54');

foreach ($strings as $name => $testcase) {
    if (ctype_graph($testcase)) {
        echo "The string '$name' consists of all (visibly) printable characters.\n";
    } else {
        echo "The string '$name' does not consist of all (visibly) printable characters.\n";
    }
}

// 输出:
// The string 'string1' does not consist of all (visibly) printable character.
// The string 'string2' consists of all (visibly) printable characters.
// The string 'string3' consists of all (visibly) printable characters.