<section class="pojemnik">
	<article>
		<header>
			<h1>Example: <?php echo $project->getNumber()?></h1>
			<h2><?php echo $project->getTitle()?></h2>
			<p><?php echo $project->getLead()?></p>
		</header>
		<?php echo $project->getContents() ?>
		<footer><?php echo $project->getUpdateAt()?></footer>
	</article>
</section>