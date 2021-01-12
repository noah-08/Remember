<?php

// sprintf ( string $format , mixed ...$values ) : string
$num = 5;
$location = 'tree';

$format = 'There are %d monkeys in the %s';

echo sprintf($format, $num, $location);

// 指定顺序
$format = ' The %2$s contains %1$d monkeys';
echo sprintf($format, $num, $location);