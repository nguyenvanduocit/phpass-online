<?php
require_once __DIR__ . '/function.php';
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>PHPass Generator - Online Password Hashing for WordPress</title>
		<meta name="robots" content="noodp,noydir"/>
		<meta name="description" content="Use PHPass to generate password for WordPress, Drupal. Helpfull when you forgot or lost the password"/>
		<link rel="publisher" href="https://plus.google.com/112246631672323028789"/>
		<meta property="og:locale" content="vi_VN" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Online Password Hashing for WordPress" />
		<meta property="og:description" content="Use PHPass to generate password for WordPress, Drupal. Helpfull when you forgot or lost the password" />
		<meta property="og:url" content="http://phpass.wordpresskite.com/" />
		<meta property="og:site_name" content="Online Password Hashing for WordPress" />
		<meta property="article:publisher" content="https://www.facebook.com/senvietorg" />
		<meta property="og:image" content="http://phpass.wordpresskite.com/img/thumbnail.jpg" />
		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:description" content="Use PHPass to generate password for WordPress, Drupal. Helpfull when you forgot or lost the password"/>
		<meta name="twitter:title" content="PHPass Generator - Online Password Hashing for WordPress"/>
		<meta name="twitter:site" content="@laptrinhsenviet"/>
		<meta name="twitter:domain" content="PHPass Generator"/>
		<meta name="twitter:image:src" content="http://phpass.wordpresskite.com/img/thumbnail.jpg"/>
		<meta name="twitter:creator" content="@laptrinhsenviet"/>
		<link rel="stylesheet" href="css/stylesheet.css"/>
	</head>
	<body>
	<div id="fb-root"></div>
	<hgroup>
		<h1>Online Password Hashing</h1>
		<h3>Generate hashed Password for WordPress, bbPress, Drupal.</h3>
	</hgroup>
	<form id="generateForm" class="card">
		<div class="group">
			<input type="text" id="newPassword" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
			<label>New password</label>
		</div>
		<div id="resultContainer" class="group" style="display: none">
			<div class="group">
				<input type="text" id="hashedPassword"/>
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Result</label>
			</div>
			<a style="text-align: center" href="https://www.youtube.com/watch?v=03cp3U2zqfc" target="_blank" rel="external nofollow"><h3>Learn how to use this hash</h3></a>
		</div>
		<button type="submit" class="button buttonBlue">GENERATE
			<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
		</button>
	</form>
	<div class="card">
		<div class="fb-like" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
		<div class="g-plusone" data-size="tall" ></div>
		<a href="https://twitter.com/share" class="twitter-share-button" data-via="laptrinhsenviet" data-size="large" data-related="laptrinhsenviet" data-hashtags="passwordHasing" data-dnt="true">Tweet</a>
	</div>
	<footer>
		<a href="http://www.polymer-project.org/" target="_blank"><img src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>
		<p>Powered by <a href="http://www.polymer-project.org/" target="_blank">Google</a>, <a href="http://senviet.org">Sen Việt</a></p>
	</footer>
	</body>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3&appId=282684011856679";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/form.js"></script>
	<script src="js/main.js"></script>
</html>