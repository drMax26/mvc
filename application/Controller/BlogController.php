<?php
class BlogController extends AbstractController
{
	public function blogAriclesAction()
	{
		$model = $this->getModel(BlogModel::class);
		$articles = $model->getArticles();
		$this->render('blog', $articles);
	}
	
	public function blogAricleAction()
	{
		$articleid = filter_input(INPUT_GET, 'article_id');
		$model = $this->getModel(BlogModel::class);
		$article = $model->getArticle($articleid);
		$this->render('blogArticle', $article);
	}
	
}
