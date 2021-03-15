<?php
/**
 *  返回某个历法中某年中某月的天数
 *  cal_days_in_month (int $calendar, int $month, int $year ) : int
 */


$num = cal_days_in_month(CAL_GREGORIAN, 11, 2000);
echo "2000年11月有 $num 天";