<?php

$users = [
	
	[

		'username' => 'josh',
		'email' => 'josh2410@gmail.com',
		'likes' => ['cats', 'dogs']
		
	],

	[

		'username' => 'travis',
		'email' => 'travis@gmail.com',
		'likes' => ['travel', 'food']	
	],

	[

		'username' => 'davis',
		'email' => 'davuis@gmail.com',
		'likes' => ['books', 'coffee']	
	]


	
];


$users[NEYMAR] = 'JOSH';//

$users[1]['likes'][1] = 'kittens';

$users[0]['about'] = 'Learning php @codecourse.com';
$users[1]['about'] = 'Learning php @codecourse.com';
$users[2]['about'] = 'Learning php @codecourse.com';



echo '<pre>', var_dump($users), '</pre>';

foreach ($users as $user) {
	# code...
	echo $user['likes'][1] . '<br>';
};

echo $users[0]['likes'][0];
//syntax to display/echo out 'study'//
//echo $users [1] [username];//

/*	
echo $users [1] [username];
echo $users [1] [email'];
*/

//syntax to echo/display the username and email id of the first array within the users array.//

//This is an example of a Multi-Dimensional Array, by placing multiple arrays within an array.//

//We can build onto these & create an even higher level of application.//
