<?php


// 创建一个匿名函数
// create_function ( string $args , string $code ) : string
$newfunc = create_function('$a,$b', 'return "ln($a) + ln($b) = " . log($a * $b);');

echo "New anonymous function: $newfunc\n";
// 输出: New anonymous function: lambda_1

// M_E: 常量值:
echo $newfunc(2, M_E) . "\n";
// 输出: ln(2) + ln(2.718281828459) = 1.6931471805599