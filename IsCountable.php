<?php

/**
 * 验证变量的内容是否为可数值
 * is_countable ( mixed $var ) : bool
 */

var_dump(is_countable([1, 2, 3])); // bool(true)
var_dump(is_countable(new ArrayIterator(['foo','bar','baz']))); // bool(true)
var_dump(is_countable(new ArrayIterator()));    // bool(ture)
var_dump(is_countable(new stdClass())); // bool(false)