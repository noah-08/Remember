<?php

// function_exists 如果给定的函数已被定义就返回TRUE
// function_exists (string $function_name) : bool

if (function_exists('imap_open')) {
    echo "IMAP functions are available. \n";
} else {
    echo "IMAP functions are not available. \n";
}

// 输出: IMAP functions are not available.