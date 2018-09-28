<?php include 'Templates/header.php';?>
<center>
	<h1>Blog</h1>
</center>
	<hr>
<div>
	<?php foreach ($articles as $article):?>
		<a href = '?page=article&article_id=<?=$article[0]?>'><?=$article[1]?></a><br>
	<?php endforeach;?>
</div>
<?php include 'Templates/footer.php';?>