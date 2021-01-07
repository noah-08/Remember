<?php

$city = "Hu nan";
$state = "Shao Yang";
$event = "Club";

$location_vars = array("city", "state");
$result = compact("event", "nothing_here", $location_vars);
print_r($result); // 输出: Array ( [event] => club [city] => Hu nan [state] => shao yang )