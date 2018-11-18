<?php

namespace UiBundle\Twig\Extension;

use Pagerfanta\PagerfantaInterface;

class PagerfantaExtension extends \Twig_Extension {

	/**
	 * {@inheritdoc}
	 */
	public function getFunctions() {
		return array(
			new \Twig_SimpleFunction('pagerfanta', array($this, 'renderPagerfanta'), array('is_safe' => array('html'))),
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
	public function renderPagerfanta(PagerfantaInterface $pagerfanta, $viewName = null, array $options = array()) {
		$routeGenerator = $this->createRouteGenerator($options);
		$view = new \Pagerfanta\View\TwitterBootstrap4View();
		return $view->render($pagerfanta, $routeGenerator, $options);
	}

	/**
	 * [createRouteGenerator description]
	 *
	 * @param  array  $options [description]
	 * @return [type]          [description]
	 */
	private function createRouteGenerator($options = array()) {

		$options = array_replace(array(
			'path' => null,
			'routeName' => null,
			'routeParams' => array(),
			'omitFirstPage' => false,
			'pageParameter' => '[page]',
		), $options);

		// temp .. dont have time to implement a complex system
		// which uses the router to get details
		return function ($page) use ($options) {
			return sprintf("%s?page=%s", $options['path'], $page);
		};
	}

}