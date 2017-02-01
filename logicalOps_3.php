<?php

$dayOfWeek = 6;
$workingTheWeekend = false;

if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingTheWeekend) {
	# code...
	echo "You have a day off!";
}