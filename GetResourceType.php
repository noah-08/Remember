<?php
//  返回资源（resource）类型
//  get_resource_type ( resources $handle ) : string);
$fp = fopen("index.php","w");
echo get_resource_type($fp)."\n";   // 输出: stream