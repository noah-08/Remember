<?php

/**
 * 返回星期的日期
 * jddayofweek ( int $julianday [, int $mode = CAL_DOW_DAYNO ] ) : mixed
 * mode:
 * 0 -> 返回数字形式 (0 = Sunday, 1 = Monday, etc)
 * 1 ->  返回字符串形式 (English-Gregorian)
 * 2 -> 返回缩写形式的字符串 (English-Gregorian)
 */

// 返回 1998 年 1 月 13 日这天是周几:
$jd = gregoriantojd(11,23,2000); // gregoriantojd: 转变一个 Gregorian 历法日期到 Julian Day 计数

echo jddayofweek($jd,1); // 输出: Thursday