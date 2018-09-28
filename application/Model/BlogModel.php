<?php
class BlogModel extends AbstractModel
{
	private $articles = [];
	private $articlesPath = 'Data/articles.csv';
			
	public function getArticles()
	{
		if (0 == count($this->articles)) {
			$this->getArticlesContent();
		}
		return [
				'title' => 'My blog',
				'articles' => $this->articles,
				];
	}
	
	public function getArticle($articleid)
	{
		if (0 == count($this->articles)) {
			$this->getArticlesContent();
		}
		
		return [
				'title' => $this->articles[$articleid][1],
				'article' => $this->articles[$articleid][2],
				];
	}
	
	function getArticlesContent()
	{
		$this->articles = file($this->articlesPath);
		for ($i = 0; $i < count($this->articles); $i++) {
			$this->articles[$i] = str_getcsv($this->articles[$i], '~', '"');
		}
	}
}