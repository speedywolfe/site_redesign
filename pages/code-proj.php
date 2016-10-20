<?php require_once( '../couch/cms.php' ); ?>
<cms:template title="Code" clonable="1">
	<cms:editable name="project_name" type="text" />
	<cms:editable name="code_proj_description" type="textarea" />
	<cms:editable name="code_proj_image" type="image" />
</cms:template>
<!doctype html>
<html>
	<head> 
		<meta charset="utf-8">

	  <title>Mitchell Wolfe - Code</title>
	  <meta name="description" content="Mitchell Wolfe's Website, Code Section">
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
				<li><a class="current-strike" href="/pages/code-overview/">Code</a></li>
				<li><a href="/pages/design-overview/">Design</a></li>
				<li><a href="pages/daily-overview/">Daily</a></li>
				<li><a href="/pages/other-overview/">Other</a></li>
				<li><a href="/pages/about/">About</a></li>
			</ul>
		</nav>
		<section class="overview-holder">
			<span> <cms:show project_name /> </span>
			<p class="proj_description_text"> <cms:show code_proj_description /> </p>
			<img class="project_description_image" src="<cms:show code_proj_image />">
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