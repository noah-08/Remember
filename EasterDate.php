<?php

// 得到指定年份的复活节午夜时的 Unix 时间戳
// easter_date ( int year = ? ) : int
// 超出 Unix 时间戳范围，（比如1970以前或2037年以后），该函数将返回一个警告。

echo date("M-d-Y", easter_date(2000));  // Apr-23-2000
echo date("M-d-Y", easter_date(2020));  // Apr-12-2020
echo date("M-d-Y", easter_date(2021));  // Apr-04-2021