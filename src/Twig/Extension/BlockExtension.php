<?php

namespace UiBundle\Twig\Extension;

use Pagerfanta\PagerfantaInterface;
use Zend\Expressive\Helper\UrlHelper;

class BlockExtension extends \Twig_Extension {

	/**
	 * [__construct description]
	 *
	 * @param UrlHelper $urlHelper [description]
	 */
	public function __construct(

	) {

	}

	/**
	 * {@inheritdoc}
	 */
	public function getFunctions() {
		return array(
			new \Twig_SimpleFunction('tower_block_render_event', [$this, 'test'], ['is_safe' => ['html']]),
		);
	}

	/**
	 * [renderPagerfanta description]
	 *
	 * @param  PagerfantaInterface $pagerfanta [description]
	 * @param  [type]              $viewName   [description]
	 * @param  array               $options    [description]
	 * @return [type]                          [description]
	 */
	public function test() {

	}

}