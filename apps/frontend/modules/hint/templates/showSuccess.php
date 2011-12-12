<section class="pojemnik">
	<article>
		<header>
			<h1>Example: <?php echo $hint->getNumber()?></h1>
			<h2><?php echo $hint->getTitle()?></h2>
			<p><?php echo $hint->getLead()?></p>
		</header>
		<?php echo $hint->getContents() ?>
		<footer><?php echo $hint->getUpdateAt()?></footer>
	</article>
</section>