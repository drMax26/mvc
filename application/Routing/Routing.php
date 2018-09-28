<?php
	use Routing\Router;

	$router = new Router();
	
	$router->add('empty', '', 'MainController', 'indexAction', 'GET|POST');
	$router->add('homepage', 'homepage', 'MainController', 'indexAction', 'GET|POST');
	$router->add('error404', '/404', 'MainController', 'error404Action' , 'GET|POST');
	
	$router->add('blog', 'blog', 'BlogController', 'blogAriclesAction' , 'GET|POST');
	$router->add('blog_article', 'article', 'BlogController', 'blogAricleAction' , 'GET|POST');
	