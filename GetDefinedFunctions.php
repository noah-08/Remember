<?php

// get_defined_functions ([bool $exclude_disabled = FALSE]) : array
// exclude_disabled: 禁用的函数是否应该在返回的数据里排除

function myRow($id, $data)
{
    return "<tr><th>$id</th><td>$data</td></tr>\n";
}

$arr = get_defined_functions();
print_r($arr);

// 输出:
/**
 * Array( [internal] => Array ( [0] => zend_version .... [1300] => cli_get_process_title) )
 * [User] => Array ( [0] => myrow)
 */