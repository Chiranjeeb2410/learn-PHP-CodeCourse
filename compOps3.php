<?php

$name = 'alex';
$age = 24;  
 		
if ($age !== '24') {
	# code...
	echo "True";
} else {

	echo "False ";
}

//if param isn't true so the condition evaluates to false
//so the output is echoed as false in case of '!='

//however, when we use strict typecast(!==) in place of '!='
//the condition evaluates to true as per the if param

//the use of strict typecast is typically pretty handy in case
//restricted values 