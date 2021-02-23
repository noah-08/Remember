<?php

/**
 * 检查类的方法是否存在
 * method_exists ( mixed $object, string $method_name ) : bool
 */

$directory = new Directory('.');
var_dump(method_exists($directory, 'read')); // 输出: bool(true)