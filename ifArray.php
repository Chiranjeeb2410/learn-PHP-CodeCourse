<?php

$dayOfWeek =  7;

$daysOfWeek = [

	1	=> 'Monday',

	2	=> 'Tuesday',

	3	=> 'Wednesday',

	4	=> 'Thursday',

];

var_dump(array_keys($daysOfWeek));

/*if (in_array($dayOfWeek, array_keys($daysOfWeek)))	{

	echo $daysOfWeek[$dayOfWeek];

}	else {

		echo "That's not a valid day !";
}