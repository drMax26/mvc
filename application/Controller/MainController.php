<?php
class MainController extends AbstractController
{
	public function indexAction()
	{
		$model = $this->getModel(MainModel::class);
		$data = $model->getIndexData();
		$this->render('homepage', $data);
	}
	
}
