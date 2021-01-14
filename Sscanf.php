<?php

// sscanf ( string $str , string $format , mixed &$... = ? ) : mixed

// 获取序列号
list($serial) = sscanf("SN/2350001", "SN/%d");

// 获取生成日期
$mandate = "january 01 2000";

list($month, $day, $year) = sscanf($mandate, "%s %d %d");

// 输出: 2350001 项目生成于 2000-jan-1
echo "$serial 项目生成于 $year-". substr($month, 0, 3) . "-$day\n";