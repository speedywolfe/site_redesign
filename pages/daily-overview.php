<?php require_once( '../couch/cms.php' ); ?>
<cms:template title="daily-overview">
	<cms:editable name="daily_overview_description" type="text"/>
	<cms:repeatable name="month">
		<cms:editable name="month_name" type="text" />
		<cms:editable name="image1" type="image" />
		<cms:editable name="image2" type="image" />
		<cms:editable name="image3" type="image" />
		<cms:editable name="image4" type="image" />
		<cms:editable name="link" type="text" />
	</cms:repeatable>
</cms:template>
<!doctype html>

<html>
	<head> 
		<meta charset="utf-8">

	  <title>Mitchell Wolfe - Daily Overview</title>
	  <meta name="description" content="Mitchell Wolfe's Website, Daily Section">
	  <meta name="author" content="Mitchell Wolfe">
	  <meta name=viewport content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="/styles/desk.css">
	</head>
	<body>
		<nav>
			<a href="/../"><section id="logo-holder-left">
				<img id="logo" class="logo-left" src="/images/letter_logo.png" alt="logo">
			</section> </a>
			<input type="checkbox" id="menu-toggle">
		      <label for="menu-toggle" class="label-toggle"> Menu </label>
			</input>
			<ul class="nav-bar">
				<li><a href="/pages/photography-overview/">Photography</a></li>
				<li><a href="/pages/code-overview/">Code</a></li>
				<li><a href="/pages/design-overview/">Design</a></li>
				<li><a class="current-strike" href="/pages/daily-overview/">Daily</a></li>
				<li><a href="/pages/other-overview/">Other</a></li>
				<li><a href="/pages/about/">About</a></li>
			</ul>
		</nav>
		<section class="overview-holder">
			<p class="overview-description"> <cms:show daily_overview_description /> </p>
			<cms:show_repeatable 'month' >
				<span class="project-repeat-top"> <cms:show month_name /></span>
				<div class="project-repeat-middle">
					<img class="preview_image" src="<cms:show image1 />" alt=""/>
					<img class="preview_image" src="<cms:show image2 />" alt=""/>
					<img class="preview_image" src="<cms:show image3 />" alt=""/>
					<img class="preview_image" src="<cms:show image4 />" alt=""/>	
				</div>
				<a class="project-repeat-bottom" href="<cms:show link />"> See Entire Month --> </a>
			</cms:show_repeatable>
		</section>
		<footer>
			<ul id="links">
				<li id="linkedin"><a href="https://www.linkedin.com/in/wolfemitchell" target="_blank"><img src="/images/icons/footer/linkedin.png" alt=""></a></li>
				<li id="instagram"><a href="https://www.instagram.com/speedywolfe/" target="_blank"><img src="/images/icons/footer/instagram.png" alt=""></a></li>
				<li id="email"><a href="mailto:mitchell@mitchellwolfe.com"><img src="/images/icons/footer/email_icon.png" alt=""></a></li>
			</ul>
			<span id="copyright"> Site Design and Coding by Mitchell Wolfe </span>
		</footer>
	</body>
</html>
<?php COUCH::invoke(); ?>