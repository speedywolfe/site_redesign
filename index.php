<?php require_once( 'couch/cms.php' ); ?>
<cms:template title="main" >
	<cms:editable name='main_page_image' type='image'/>
</cms:template>
<!doctype html>

<html lang="en">
	<head>
	  <meta charset="utf-8">

	  <title>Mitchell Wolfe</title>
	  <meta name="description" content="Mitchell Wolfe's Website">
	  <meta name="author" content="Mitchell Wolfe">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="/styles/desk.css">
	</head>

	<body>
		<section id="logo-holder" class="spacer">
			<img id="logo" class="logo-middle" src="images/letter_logo.png" alt="logo">
		</section>
		<section id="descriptor-holder" class="spacer">
			<span id="site-descriptor"> Hello! My Name is Mitchell Wolfe. I am a photographer, designer, programmer, and technologist. If you like my work then feel free to contact me for freelance projects. </span>
		</section>
		<nav id="index_nav">
			<ul>
				<li><a href="/pages/photography-overview/">Photography</a></li>
				<li><a href="/pages/code-overview/">Code</a></li>
				<li><a href="/pages/design-overview/">Design</a></li>
				<li><a href="/pages/daily-overview/">Daily</a></li>
				<li><a href="/pages/other-overview/">Other</a></li>
				<li><a href="/pages/about/">About</a></li> 
			</ul>
		</nav>
		<img id="main-page-image" src="<cms:show main_page_image />" alt="Main Page Image"/>
		<footer>
			<ul id="links">
				<li id="linkedin"><a href="https://www.linkedin.com/in/wolfemitchell" target="_blank"><img src="images/icons/footer/linkedin.png" alt=""></a></li>
				<li id="instagram"><a href="https://www.instagram.com/speedywolfe/" target="_blank"><img src="images/icons/footer/instagram.png" alt=""></a></li>
				<li id="email"><a href="mailto:mitchell@mitchellwolfe.com"><img src="images/icons/footer/email_icon.png" alt=""></a></li>
			</ul>
			<span id="copyright"> Site Design and Coding by Mitchell Wolfe </span>
		</footer>
	</body>
</html>
<?php COUCH::invoke(); ?>