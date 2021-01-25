<?php

// 说明: round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP] ) : float
//  对浮点数进行四舍五入

echo round(3.4).PHP_EOL;    // 3
echo round(3.5).PHP_EOL;    // 4
echo round(3.6).PHP_EOL;    // 4
echo round(3.6,0).PHP_EOL;  // 4
echo round(1.95883,2).PHP_EOL;  // 1.96
echo round(1241757,-3).PHP_EOL; // 1242000
echo round(5.045,2).PHP_EOL;    // 5.05
echo round(5.055,2).PHP_EOL;    // 5.06
