<?php
spl_autoload_register(
	function ($class) 
	{
		$path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

		if (is_file($path)) {
			require $path;
			return;
		}
		
		$path = __DIR__ . '/Controller/' . str_replace('\\', '/', $class) . '.php';

		if (is_file($path)) {
			require $path;
			return;
		}
		
		$path = __DIR__ . '/Core/' . str_replace('\\', '/', $class) . '.php';

		if (is_file($path)) {
			require $path;
			return;
		}
		
		$path = __DIR__ . '/Model/' . str_replace('\\', '/', $class) . '.php';

		if (is_file($path)) {
			require $path;
			return;
		}

	throw new \LogicException(sprintf('Class "%s" not found in "%s"', $class, $path));
	}
);