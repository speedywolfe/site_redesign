<?php require_once( '../couch/cms.php' ); ?>
<cms:template title="Photography-Project" clonable="1">
	<cms:editable name="project_name" type="text" />
	<cms:editable name="project_description" type="text" />
	<cms:repeatable name="images">
		<cms:editable name="single_image" type="image" />
	</cms:repeatable>

</cms:template>
<!doctype html>
<html>
	<head> 
		<meta charset="utf-8">

	  <title>Mitchell Wolfe - Daily</title>
	  <meta name="description" content="Mitchell Wolfe's Website, Daily Section">
	  <meta name="author" content="Mitchell Wolfe">

	  <link rel="stylesheet" href="../css/desk.css">
	</head>
	<body>
		<a href="../index.html"><section id="logo-holder-left">
			<img id="logo" class="logo-left" src="../images/letter_logo.png" alt="logo">
		</section> </a>
		<nav>
			<ul>
				<li><a href="url">Photography</a></li>
				<li><a href="url">Code</a></li>
				<li><a href="url">Design</a></li>
				<li><a href="pages/daily-overview.html">Daily</a></li>
				<li><a href="url">Other</a></li>
				<li><a href="url">About</a></li> 
			</ul>
		</nav>
		<section class="overview-holder">
				<span> <cms:show project_name /> </span>
				<span> <cms:show project_description /> </span>
				<div class="image_grid">
					<cms:show_repeatable 'images' >
							<img class="grid_image" src="<cms:show single_image />" alt=""/>
					</cms:show_repeatable>
				</div>
		</section>
		<footer>
			<ul id="links">
				<li id="linkedin"><img src="../images/icons/footer/linkedin.png" alt=""></li>
				<li id="instagram"><img src="../images/icons/footer/instagram.png" alt=""></li>
				<li id="twitter"><img src="../images/icons/footer/twitter.png" alt=""></li>
				<li id="email"><img src="../images/icons/footer/email_icon.png" alt=""></li>
			</ul>
			<span id="copyright"> Site Design and Coding by Mitchell Wolfe </span>
		</footer>
	</body>
</html>
<?php COUCH::invoke(); ?>