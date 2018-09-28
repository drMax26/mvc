<?php include 'Templates/header.php';?>
<center>
	<h1>Main page</h1>
	<hr>
	<?php foreach ($links as $link):?>
		<a href = '<?=$link['href']?>'><?=$link['title']?></a><br>
	<?php endforeach;?>
</center>
<?php include 'Templates/footer.php';?>