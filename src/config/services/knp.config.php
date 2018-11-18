<?php

use Zend\ServiceManager\AbstractFactory\ConfigAbstractFactory;

return [

	ConfigAbstractFactory::class => [],
	'dependencies' => [
		'aliases' => [
			'KnpDefaultRenderer' => Knp\Menu\Renderer\TwigRenderer::class,
		],
		'invokables' => [],
		'factories' => [
			Knp\Menu\Twig\MenuExtension::class => \UiBundle\Twig\Extension\Factory\MenuExtensionFactory::class,
			Knp\Menu\Renderer\TwigRenderer::class => UiBundle\Twig\Renderer\Factory\DefaultRendererFactory::class,
		],
	],

];
