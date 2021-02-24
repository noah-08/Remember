<?php

/**
 * 做纯字符检测
 * ctype_alpha ( string $text ) : bool
 * 如果在当前语言环境中 text 里的每个字符都是一个字母,那么就返回 TRUE,反之则返回 FALSE
 */

$strings = array('KjgWZC', 'arf12');
foreach ($strings as $testcase) {
    if (ctype_alpha($testcase)) {
        echo "The string $testcase consists of all letters.\n";
    } else {
        echo "The string $testcase does not consist of all letters.\n";
    }
}

// 输出:
// The string KjgWZC consists of all letters.
// The string arf12 does not consist of all letters.