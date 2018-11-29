<?php

use Zend\Expressive\Helper\UrlHelper;
use Zend\ServiceManager\AbstractFactory\ConfigAbstractFactory;

return [

	ConfigAbstractFactory::class => [
		UiBundle\Twig\Extension\PagerfantaExtension::class => [
			UrlHelper::class,
		],
	],
	'dependencies' => [
		'aliases' => [],
		'invokables' => [
			Twig_Extensions_Extension_Intl::class,
		],
		'factories' => [],
	],

];
