<?php require_once( '../couch/cms.php' ); ?>
<cms:template title="Daily" clonable="1">
	<cms:editable name="month" type="text" />
	<cms:repeatable name="day">
		<cms:editable name="day_tag" type="text" />
		<cms:editable name="daily_image" type="image" />
		<cms:editable name="daily_text" type="textarea" />
		<cms:editable
			name="check_image"
			label="Show Image?"
			opt_values='Yes=1'
			type="checkbox"
		/>
		<cms:editable
			name="check_text"
			label="Show text?"
			opt_values='Yes=1'
			type="checkbox"
		/>
	</cms:repeatable>

</cms:template>
<!doctype html>
<html>
	<head> 
		<meta charset="utf-8">

	  <title>Mitchell Wolfe - Daily <cms:show month /></title>
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
			<div class="month_name_contain">
				<span> <cms:show month /> </span>
			</div>
			<div class="image_grid">
				<cms:show_repeatable 'day' >
					<div class="single_day_div">
						<span class="single_day_tag"> <cms:show day_tag /> </span> <br>
						<cms:if check_image> <img class="grid_image" src="<cms:show daily_image />" alt=""/> </cms:if>
						<cms:if check_text> <span class="poems"> <cms:show daily_text /> </span> </cms:if>
					</div>
				</cms:show_repeatable>
			</div>
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