<?php

// 返回选定历法的信息
// cal_info ( int $calender = -1 ) : array
// 0 or CAL_GREGORIAN - 阳历
// 1 or CAL_JULIAN - 儒略日（是在儒略周期内以连续的日数计算时间的计时法，主要是天文学家在使用）
// 2 or CAL_JEWISH - 犹太历; 犹历（犹太人所使用的一种阴阳历记日系统，从公元前3761年算起）
// 3 or CAL_FRENCH - 法国共和历（法兰西第一共和国采用的革命历法，于1793年11月24日起采用，1806年元旦废止）

$info = cal_info(0);
var_dump($info);

/**
 *  输出:
 *  array(5) {
 *  ["months"] =>
 *      array(12) {
 *          [1] => string(7) "January"
 *          [2] => string(8) "February"
 *          [3] => string(5) "March"
 *          [4] => string(5) "April"
 *          [5] => string(3) "May"
 *          [6] => string(4) "June"
 *          [7] => string(4) "July"
 *          [8] => string(6) "august"
 *          [9] => string(9) "September"
 *          [10] => string(7) "October"
 *          [11] => string(8) "November"
 *          [12] => string(8) "December"
 *      }
 *  ["abbrevmonths"] =>
 *      array(12) {
 *          [1] => string(3) "Jan"
 *          [2] => string(3) "Feb"
 *          [3] => string(3) "Mar"
 *          [4] => string(3) "Apr"
 *          [5] => string(3) "May"
 *          [6] => string(3) "Jun"
 *          [7] => string(3) "Jul"
 *          [8] => string(3) "Aug"
 *          [9] => string(3) "Sep"
 *          [10] => string(3) "Oct"
 *          [11] => string(3) "Nov"
 *          [12] => string(3) "Dec"
 *      }
 *  ["maxdaysinmonth"] => int(31) ["calname"] => string(9) "Gregorian"
 *  ["calsymbol"] => string(13) "CAL_GREGORIAN"
 * }
 */