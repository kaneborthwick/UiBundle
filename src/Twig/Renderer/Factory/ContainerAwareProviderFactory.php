<?php

namespace UiBundle\Twig\Renderer\Factory;

use Interop\Container\ContainerInterface;

class ContainerAwareProviderFactory {

	public function __invoke(ContainerInterface $container) {
		return new \Knp\Menu\Renderer\PsrProvider($container, "ss");
	}
}
