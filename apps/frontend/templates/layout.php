<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<link rel="shortcut icon" href="/favicon.ico" />
<?php include_stylesheets() ?>
<?php include_javascripts() ?>
</head>
<body>

	<?php use_helper('Crosslinks') ?>


	<div id="templatemo_header_wrapper">
		<div id="templatemo_header">

			<div class="header_left">
				<div id="site_title">
					<a href="<?php echo url_for('@homepage') ?>"> <img
						src="my.jpg" alt="free css" /> <!-- <span>Free CSS Template</span> -->
					</a>
				</div>
			</div>
			<!-- end of header left -->

			<div class="header_right">

				<div id="search_box">

					<form action="#" method="get">
						<input type="text" value="" name="username" size="10"
							id="input_field" title="usernmae" /> <input type="submit"
							name="login" value="Search" alt="login" id="submit_btn"
							title="Login" />
					</form>

					<div class="cleaner"></div>
				</div>

				<div id="templatemo_menu">

					<ul>
						<li><a href="<?php echo url_for('example/index') ?>">EXAMPLES</a></li>
						<li><a href="<?php echo url_for('project/index') ?>" class="current">PROJECTS</a></li>
						<li><a href="<?php echo url_for('hint/index') ?>">HINTS</a></li>
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">LOGIN</a></li>
					</ul>

				</div>
				<!-- end of templatemo_menu -->

			</div>
			<!-- end of header right -->

			<div class="cleaner"></div>
		</div>
		<!-- end of header -->
	</div>
	<!-- end of header wrapper -->


	<?php echo $sf_content ?>


	<div id="templatemo_services_wrapper">
		<div id="templatemo_services">

			<div class="services_box">
				<h2>Examples</h2>
				<p>Suspendisse vitae neque eget ante tristique vestibulum.
					Pellentesque dolor nulla, congue vitae, fringilla in, varius a,
					orci. Mauris convallis.</p>
				<div class="button_02">
					<a href="<?php echo url_for('example/index')?>">Read more</a>
				</div>

				<div class="cleaner"></div>
			</div>

			<div class="services_box">
				<h2>Projects</h2>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum
					necessitatibus saepe eveniet ut et voluptates fringilla in, varius
					a, orci. Mauris convallis.</p>
				<div class="button_02">
					<a href="<?php echo url_for('project/index')?>">Read more</a>
				</div>

				<div class="cleaner"></div>
			</div>

			<div class="services_box services_box_last">
				<h2>Hints</h2>
				<p>Nullam a nulla id diam facilisis facilisis semper vitae lorem.
					Cras porttitor nisi ut turpis condimentum tincidunt. Pellentesque
					sit amet magna vel lectus.</p>
				<div class="button_02">
					<a href="<?php echo url_for('hint/index')?>">Read more</a>
				</div>

				<div class="cleaner"></div>
			</div>

		</div>
	</div>

	<div id="templatemo_content_wrapper_outer">
		<div id="templatemo_content_wrapper_inner">
			<div id="templatemo_content_wrapper">

				<div id="templatemo_content">


					<!--          	<h2 class="our_services">Camera Services</h2>
            <p>Photographer's  <a href="http://www.templatemo.com" target="_parent">CSS template</a> is provided by <a href="http://www.templatemo.com/page/1" target="_parent">templatemo.com</a> for free of charge. Validate <a href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>. You may download, edit and use this web layout for your websites. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
<ul>
            	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu nibh justo.</li>
                <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a> - Cras odio nulla, aliquam vel tincidunt vel, suscipit nec dui.</li>
          <li>Quisque sodales accumsan cursus. In at metus massa. Phasellus ut lorem eget augue.</li>
                <li>Etiam ultricies arcu id ante facilisis euismod non vitae mi. Vestibulum id quam nulla.</li>
            </ul>  -->

					<div class="cleaner_h20"></div>

					<h2 class="about_us">About me</h2>
					<p>
						Tincidunt vitae, sagittis vel, interdum at, erat. Duis vitae
						velit. Ut ultricies. Fusce sollicitudin nisl a lectus.
						Pellentesque odio. Pellentesque habitant morbi tristique senectus
						et netus et malesuada fames ac turpis egestas. Sed leo. <a
							href="#">Duis suscipit</a> lorem in risus.
					</p>

				</div>



				<!--          <div id="templatemo_sidebar"><span class="sidebar_top"></span><span class="sidebar_bottom"></span>

        	<h2 class="current_activities">Current Activities</h2>

            <div class="activities_box">
                <a href="#">Quisque in diam a justo.</a>
                <p>Molestie vivamus a velit. Cumsociis natoque penatibus et magnis. </p>
            </div>

            <div class="activities_box">
                <a href="#">Curabitur quis velit quis. </a>
                <p>Tortor tincidunt aliquet. Vivamus leo velit, convallis id, ultrices sit amet.</p>
            </div>

            <div class="activities_box">
                <a href="#">Donec eu tellus lacus</a>
                <p>Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. </p>
            </div>

         </div>  -->

				<div class="cleaner"></div>

			</div>
		</div>
	</div>

	<div id="templatemo_footer_wrapper">
		<div id="templatemo_footer">

			Copyright C 2048 <a href="#">Your Company Name</a> | <a
				href="http://www.iwebsitetemplate.com" target="_parent">Website
				Templates</a> by <a href="http://www.templatemo.com"
				target="_parent">Free CSS Template</a>
		</div>
	</div>


</body>
</html>
