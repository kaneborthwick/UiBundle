<?php

namespace UiBundle\Menu;

use Knp\Menu\ItemInterface;

interface MenuBuilderInterface {

	public function build(array $options = []): ItemInterface;
}