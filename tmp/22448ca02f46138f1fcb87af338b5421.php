<?php 

 return (object) [
	'obj' => (object) [
		'prop1' => 'haha',
		'prop2' => 'haha'
	],
	'cfg' => 'abc',
	'crazy' => 'every thing after this is a string',
	'arr' => [
		123,
		321,
		[
			'abc',
			'chabis',
			321
		],
		515,
		'23123:abc',
		'crazy haha',
		(object) [
			'prop1' => 'num'
		],
		false,
		NULL
	],
	'objy' => (object) [
		'prop1' => (object) [
			'newProp' => 'abc'
		]
	]
];