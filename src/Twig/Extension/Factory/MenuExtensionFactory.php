<?php

namespace UiBundle\Twig\Extension\Factory;

use Interop\Container\ContainerInterface;

class MenuExtensionFactory {

	public function __invoke(ContainerInterface $container) {

		$rendererProvider = new \Knp\Menu\Renderer\PsrProvider($container, "KnpDefaultRenderer");
		$menuProvider = new \UiBundle\Menu\Provider\MenuBuilderProvider($container);
		$helper = new \Knp\Menu\Twig\Helper($rendererProvider, $menuProvider);

		return new \Knp\Menu\Twig\MenuExtension($helper);
	}
}
