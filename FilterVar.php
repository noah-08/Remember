<?php
/**
 * 使用特定的过滤器过滤一个变量
 * filter_var ( mixed $variable [, int $filter = FILTER_DEFAULT [, mixed $options ]] ) : mixed
 */

var_dump(filter_var("bob@example.com", FILTER_VALIDATE_EMAIL)); // 输出: string(15) "bob@example.com"
var_dump(filter_var("http://example.com", FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)); // 输出: bool(false)