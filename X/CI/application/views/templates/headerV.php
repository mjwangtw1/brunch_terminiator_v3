<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
		在<?php echo $title ?>找早餐 - HappyBrunch.in
		</title>
		<?php

		// PUBLIC_PATH =  '/happybrunch/public'
		// if modify -> /config/constants.php to modify

		$home_url = HOME_PATH;
		$assets_url = PUBLIC_PATH.'assets';
		?>

	</head>
<body>
<div class="container"> <!-- END in footerV.php -->
	<header>
		<div class="home_logo">
		<a href="/happybrunch">Happybrunch 早餐星人</a>
		</div>
		<div class="user_status">
		<ul>
			<li><a href="#">我的記錄</a></li>
			<li><a href="#">登入</a></li>
			<li><a href="#">加入</a></li>
		</ul>
  		<!--	<div class="my_log"><a href="#"><i class="fa fa-file-text-o fa-lg"></i><span>記錄</span></a></div>
  			<div class="my_account"><a href="#"><i class="fa fa-lock fa-lg"></i><span>登入</span></a></div>
-->		</div>
	</header>

	<aside>
	<form>
  			<input name="search" placeholder="現在我想要吃...">
  			<input type="submit" value="找早餐">
	</form>		
	</aside>