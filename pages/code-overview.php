<?php require_once( '../couch/cms.php' ); ?>
<cms:template title="code-overview">
	<cms:repeatable name="projects">
		<cms:editable name="project_name" type="text" />
		<cms:editable name="project_description" type="nicedit"/>
		<cms:editable name="project_image" type="image" />
		<cms:editable name="link" type="text" />
	</cms:repeatable>
</cms:template>
<!doctype html>

<html>
	<head> 
		<meta charset="utf-8">

	  <title>Mitchell Wolfe - Code Overview</title>
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
				<li><a class="current-strike"  href="/pages/code-overview/">Code</a></li>
				<li><a href="/pages/design-overview/">Design</a></li>
				<li><a href="/pages/daily-overview/">Daily</a></li>
				<li><a href="/pages/other-overview/">Other</a></li>
				<li><a href="/pages/about/">About</a></li>
			</ul>
		</nav>
		<section class="overview-holder">
			<cms:show_repeatable 'projects' >
				<span class="project-repeat-top"> <cms:show project_name /></span>
				<div class="image_grid">
						<p class="project-description"> <cms:show project_description /> </p>
						<img class="preview_image" src="<cms:show project_image />" alt=""/>
				</div>
				<a class="project-repeat-bottom" href="<cms:show link />"> See Entire Project --> </a>
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