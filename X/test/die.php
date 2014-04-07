<?php session_start(); 

unset($_SESSION['account']);
unset($_SESSION['cond']);


	// echo '<br/>=====<br/>';
	// echo 'Session_CHECK: <br/>';
	// echo 'account: '.$_SESSION['account'];
	// echo '<br/>cond: '.$_SESSION['cond'];
	// echo '<br/>=====<br/>';
	
	// echo '<br/> LOGOUT! redirecting... in 1 | 已登出！1秒內返回登入頁面';
    //echo '<meta http-equiv="refresh" content="1;url=index.php" />';


	echo '<center><h1>You have Logged Out</h1>';
	echo '<h2>there you go.</h2>';
	echo '<img src="http://userserve-ak.last.fm/serve/_/2452707/Stewie+Griffin+stewie.jpg" ¡@align=center>';

	echo '<meta http-equiv="refresh" content="0;url=index.php" />';














?>