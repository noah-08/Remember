<?php

// 得到指定年份的3月12日到复活节之间的天数
// easter_days( int $year = ?, int $method = CAL_EASTER_DEFAULT ) : int
// 返回指定年份的3月21日到复活节之间的天数，如果没有指定年份，默认是当年。


echo easter_days(2000); // 输出: 33
echo "\n";
echo easter_days(2020); // 输出: 22
echo "\n";
echo easter_days(2021); // 输出: 14
echo "\n";