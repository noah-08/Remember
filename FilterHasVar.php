<?php

/**
 * 检查接收到的内容 是否存在指定的变量
 * filter_has_var ( int $type , string $variable_name ) : bool
 * 成功返回 TRUE 失败返回 FALSE
 */
$_GET['test'];
echo filter_has_var(INPUT_GET,'test') ? 'YES' : 'NO';

