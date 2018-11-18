<?php

namespace UiBundle\Menu\Provider;

use Knp\Menu\Provider\MenuProviderInterface;
use Psr\Container\ContainerInterface;

class MenuBuilderProvider implements MenuProviderInterface {
	private $container;

	public function __construct(ContainerInterface $container) {
		$this->container = $container;
	}

	public function get($name, array $options = array()) {
		if (!$this->container->has($name)) {
			throw new \InvalidArgumentException(sprintf('The menu "%s" is not defined.', $name));
		}

		return $this->container->get($name)->build();
	}

	public function has($name, array $options = array()) {
		return $this->container->has($name);
	}
}
