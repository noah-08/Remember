<?php

/**
 * 做字母和数字字符检测
 * ctype_alnum ( string $text ) : bool
 * 如果 text 中所有的字符全部都是字母或者数字,返回 TRUE 否则返回 FALSE
 */

    $strings = array('AbCd1zyZ9', 'foo!#$bar');

    foreach ($strings as $testcase) {
        if (ctype_alnum($testcase)) {
            echo "The string $testcase consists of all letters or digits. \n";
        } else {
            echo "The string $testcase does not consist of all letters or digits. \n";
        }
    }
    // 输出:
    // The string AbCd1zyZ9 consists of all letters or digits.
    // The string foo!#$bar does not consist of all letters or digits.