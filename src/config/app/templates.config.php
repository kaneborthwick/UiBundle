<?php

return [
	'templates' => [
		'extensions' => [
			Knp\Menu\Twig\MenuExtension::class,
			UiBundle\Twig\Extension\PagerfantaExtension::class,
			UiBundle\Twig\Extension\BlockExtension::class,
			Twig_Extensions_Extension_Intl::class,
		],
		'paths' => [
			'ui' => [__DIR__ . '/../../../templates/ui'],
		],
	],
];
