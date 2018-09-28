<?php
abstract class AbstractController
{
	protected function getModel($model)
	{
		return new $model;
	}

	protected function render($template, $data = [])
	{
		extract($data);
		include 'Application/View/' . $template . '.php';
	}
	
	public function error404Action($template = 'error404')
	{
		$model = $this->getModel(MainModel::class);
		$data = $model->getError404();
		$this->render($template, $data);
	}
}