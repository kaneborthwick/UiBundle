<?php

namespace UiBundle\Twig\Renderer\Factory;

use Interop\Container\ContainerInterface;

class DefaultRendererFactory {

	public function __invoke(ContainerInterface $container) {
		$matcher = new \Knp\Menu\Matcher\Matcher();
		$twig = $container->get(\Twig_Environment::class);
		return new \Knp\Menu\Renderer\TwigRenderer($twig, '@ui/menu/knp_menu.html.twig', $matcher);
	}
}
