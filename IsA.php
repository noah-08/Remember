<?php

/**
 * 如果对象属于该类或该类是此对象的父类则返回 True
 * is_a ( mixed $object, string $class_name, bool $allow_string = false ) : bool
 */
class IsA
{
    var $oink = 'moo';
}

$MC = new IsA();

if (is_a($MC, 'IsA')) {
    echo "yes, \$MC is still a IsA\n";
}