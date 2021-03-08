<?php

/**
 * 通过名称获取特定的外部变量，并且可以通过过滤器处理它
 * filter_input ( int $type , string $variable_name , int $filter = FILTER_DEFAULT , mixed $options = ? ) : mixed
 * type: INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER 或 INPUT_ENV 之一。
 */


$search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
$search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);

echo "You have searched for $search_html.\n"; // 输出：You have searched for Me & son.
echo "<a href='?search=$search_url'>Search again.</a>"; // 输出：<a href='?search=Me%20%26%20son'>Search again.</a>