<?php
class MainModel extends AbstractModel
{
	private $linksForMainPage =[
				0 => [
					'title' => 'Blog',
					'href' => '?page=blog'
				],
				1 => [
					'title' => 'PHP.net',
					'href' => 'http://php.net/'
				],
				2 => [
					'title' => 'PHP.SU',
					'href' => 'http://www.php.su/'
				],
			];
	public function getIndexData()
	{
		return ['title' => 'Index page Title.', 'links' => $this->linksForMainPage];
	}
}