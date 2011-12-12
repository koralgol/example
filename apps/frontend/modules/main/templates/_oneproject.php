<div id="welcome_image">
	<snap></snap>
	<img src="" alt="image" />
</div>
<div id="welcome_text">
	<h1>
		Project #001:
		<?php echo $project->getTitle()?>
	</h1>
	<p>
		<?php echo $project->getLead()?>
	</p>
	<div class="button_02">
		<a href="<?php echo url_for('project/show?slug=' . $project->getSlug())?>">Read more</a>
	</div>
</div>
