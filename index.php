<?php
new index();

class index {
	function __construct() { 
		require 'core/route.php';
		$route = new route;
		$controller = ($route->controller != '') ? $route->controller : 'controller1';
		$method = ($route->method != '') ? $route->method : 'index';
		$params = $route->params;

		require 'core/factory.php';
		require 'core/products.php';
		require 'core/controllers.php';
		require 'applications/controllers/'.$controller.'.php';
		

		$object_controller = new $controller;

		call_user_func_array(array($object_controller, $method), $params);
	}
}
?>
