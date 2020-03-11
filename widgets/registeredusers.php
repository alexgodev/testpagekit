<?php

use Pagekit\Application as App;
use Pagekit\User\Model\User;

return [
	'name' => 'alexgodev/registeredusers',

	'label' => 'Registered users',

	'events' => [
		'view.scripts' => function($event, $scripts) use ($app) {

			$scripts->register(
				'widget-registeredusers',
				'registeredusers:app/bundle/widget-registeredusers.js',
				[ '~widgets' ]
			);
		}
	],

	'render' => function($widget) use ($app) {

		$count = $widget->get('count');
		$config = $widget->get('config');
		$order = 'DESC';

		if ($count > 0) {
			$users = User::query()->limit($count)->orderBy('registered', $order)->get();
		} else {
			$users = User::query()->orderBy('registered', $order)->get();
		}

		$app['view']->script('user', 'user:app/bundle/user-index.js', 'vue');

		return $app->view('registeredusers/widget/registeredusers.php', compact('widget', 'users'));
	}
];

?>
