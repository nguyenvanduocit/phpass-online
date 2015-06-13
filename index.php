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
		<meta property="og:url" content="http://laptrinh.senviet.org/" />
		<meta property="og:site_name" content="Online Password Hashing for WordPress" />
		<meta property="article:publisher" content="https://www.facebook.com/senvietorg" />
		<meta property="og:image" content="http://laptrinh.senviet.org/wp-content/uploads/2014/01/10.jpg" />
		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:description" content="Use PHPass to generate password for WordPress, Drupal. Helpfull when you forgot or lost the password"/>
		<meta name="twitter:title" content="PHPass Generator - Online Password Hashing for WordPress"/>
		<meta name="twitter:site" content="@laptrinhsenviet"/>
		<meta name="twitter:domain" content="PHPass Generator"/>
		<meta name="twitter:image:src" content="http://laptrinh.senviet.org/wp-content/uploads/2014/01/10.jpg"/>
		<meta name="twitter:creator" content="@laptrinhsenviet"/>
		<link rel="stylesheet" href="css/stylesheet.css"/>
	</head>
	<body>


	<hgroup>
		<h1>Online Password Hashing</h1>
		<h3>The implement of PHPass. Use to generate hashed password for WordPress, bbPress, Drupal 5 & 6</h3>
	</hgroup>
	<form id="generateForm">
		<div class="group">
			<input type="text" id="newPassword" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
			<label>Type the new Password</label>
		</div>
		<div id="statusContainer" class="group" style="display: none">
			<h2>Status</h2>
			<p id="status"></p>
		</div>
		<div id="resultContainer" class="group" style="display: none">
			<h2>Result</h2>
			<input type="text" id="hashedPassword"/>
			<span class="highlight"></span>
			<span class="bar"></span>
		</div>
		<button type="submit" class="button buttonBlue">GENERATE
			<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
		</button>
	</form>
	<footer><a href="http://www.polymer-project.org/" target="_blank"><img src="https://www.polymer-project.org/images/logos/p-logo.svg"></a>
		<p><a href="http://www.polymer-project.org/" target="_blank">Google</a></p>
		<p>This page is generate by <a href="http://senviet.org">Sen Việt</a></p>
	</footer>
	</body>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/form.js"></script>
	<script src="js/main.js"></script>
</html>