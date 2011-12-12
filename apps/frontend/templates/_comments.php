<?php foreach ($comments as $comment):?>
<article>
	<header>
		<h1><?php echo $comment->getCreatedBy()?></h1>
		<h2><?php echo $comment->getCreatedAt()?></h2>
	</header>
	<?php echo $comment->getContents()?>
</article>
<?php endforeach;?>