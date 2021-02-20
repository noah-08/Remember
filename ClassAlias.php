<?php
    // 为一个类创造别名
    // class_alias ( string $original, string $alias , bool $autoload = true ) : bool
    class foo {}

    class_alias('foo','bar');

    $a = new foo;
    $b = new bar;

    // objects 相同的
    var_dump($a == $b,$a === $b);
    var_dump($a instanceof $b);

    // class 相同的
    var_dump($a instanceof foo);
    var_dump($a instanceof bar);

    var_dump($b instanceof foo);
    var_dump($b instanceof bar);

