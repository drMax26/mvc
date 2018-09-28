<?php
namespace Routing;
	
class Router
{
	private $routes = [];
	
	public function __construct()
	{
		//echo 'Router Start<br>';
	}
	
	public function add($name, $pattern, $controller, $action, $method = 'GET')
	{
		$this->routes[$name] = array(
			'pattern' => $pattern,
			'controller' => $controller,
			'action' => $action,
			'method' => $method,
		);
	}
	
	public function getController(string $page = 'homepage')
	{
		foreach ($this->routes as $name => $route) {
			if ($page === $route['pattern']) {
				return $route['controller'];
			}
		}
		return 'MainController';
	}
	
	public function getMethod(string $page = 'homepage')
	{
		foreach ($this->routes as $route) {
			if ($page === $route['pattern']) {
				return $route['action'];
			}
		}
		return 'error404Action';
	}
}

?>