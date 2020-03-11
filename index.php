<?php

use Pagekit\Application;


return [
	'name' => 'registeredusers',
	'type' => 'extension',
	'main' => function(Application $app) {
	},

	'autoload' => [
	],

	'nodes' => [
	],

	'widgets' => [
		'widgets/registeredusers.php'
	],
	'resources' => [
		'registeredusers:' => ''
	],

	'events' => [
	]
];
