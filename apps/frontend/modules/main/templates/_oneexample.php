<div id="welcome_image">
	<snap></snap>
	<img src="" alt="image" />
</div>
<div id="welcome_text">
	<h1>Example #001:<?php echo $example->getTitle() ?></h1>
	<p><?php echo $example->getLead() ?></p>
	<div class="button_02"><a href="<?php echo url_for('example/show?slug=' . $example->getSlug())?>">Read more</a></div>
</div>