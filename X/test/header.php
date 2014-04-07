<html>
	<head>
		<meta charset="utf-8">
		<title>
			早餐星人 HappyBrunch.in
		</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/reset.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
		<link rel="stylesheet" type="text/css" href="stylesheets/font-awesome.css">
	</head>
	<body>
		<div class="container">
			<div class="wrap">
				<header>
					<div class="user_status">
						<ul>
							<li>
								<a href="/test"><img src="assets/site-titlev3.png"></a>
							</li>
						</ul>
						<form class="form-wrapper" action="#" method="post">
							<ul>
							<li><input type="text" placeholder="今天我想吃..." required class="placeholder"></li>
							<li><button type="submit">找</button></li>
							</ul>
						</form>

							<!--                     <div id="what_eaten">我今天吃了...</div> -->
							<ul id="login_field">
								<li><a href="#">我的帳戶</a></li>
						
							</ul><!--id="login_field2"-->
						<ul>
						<li>
							<a class="buttonX member" href="member.php">[User]</a>
						</li>
						<li>
							<a class="buttonX logout" href="die.php">登出</a>
						</li>
						</ul>

						<div class="clearfix"></div>
						<form method="post" action="login.php">
						<div id="info_box">
							<ul id="userbar">
						
								<li>
									<input class="user_id" type="text" name="name" placeholder="帳號" required>
								</li>
								<li>
									<input class="user_pw" type="password" name="password" placeholder="請輸入密碼" required>
								</li>
								<li>
									<button class="login_button" type="submit"><i class="fa fa-unlock-alt"></i> 登入</button>
								</li>
							</ul>

						</div>
					
					
						</form>
					</div><!--class="user_status"-->
				</header>
				<div class="clearfix"></div>
				<div id="localtime"></div>