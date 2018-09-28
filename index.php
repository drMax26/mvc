<?php
	ini_set('error_reporting', E_ALL);
	
	
	require __DIR__ . '/Application/bootstrap.php';
	require __DIR__ . '/Application/Routing/Routing.php';

	if (isset($_GET['page'])) {
		$page = filter_input(INPUT_GET, 'page');
	} else {
		$page = 'homepage';
	}
	
	
	$controllerName = $router->getController($page);
	$controllerMethod = $router->getMethod($page);
	
	$controller = new $controllerName($page);
	$controller->$controllerMethod();
?>