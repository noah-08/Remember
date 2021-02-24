<?php

/**
 * 做纯数字检测
 * ctype_digit ( string $text ) : bool
 */
$strings = array('1820.20', '10002', 'wsl!12');

foreach ($strings as $testcase) {
    if (ctype_digit($testcase)) {
        echo "The string $testcase consists of all digits.\n";
    } else {
        echo "The string $testcase does not consist of all digits.\n";
    }
}

// 输出:
// The string 1820.20 does not consist of all digits.
// The string 10002 consists of all digits.
// The string wsl!12 does not consist of all digits.