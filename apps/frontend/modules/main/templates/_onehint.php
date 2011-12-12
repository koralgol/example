<div id="welcome_image">
	<span></span>
	<img src="" alt="image" />
</div>
<div id="welcome_text">
	<h1>Hint #001: <?php echo $hint->getTitle()?></h1>
	<p><?php echo $hint->getLead()?></p>
	<div class="button_02"><a href="<?php echo url_for('hint/show?slug=' . $hint->getSlug())?>">Read more</a></div>
</div>