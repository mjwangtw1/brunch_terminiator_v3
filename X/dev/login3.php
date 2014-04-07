												<!--PHP SESSION 啟動 -->
												<?php session_start(); 

												if($_SESSION['cond']=='works'){

												//Found previous session, redirect
												echo '<meta http-equiv="refresh" content="0;url=index.php" />';	


												}



												?>


<html>

<head>
<meta charset="utf-8">
		<title>找早餐 Find Me Brunch! </title>


		<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>



												<!--PHP 檢查Session, 不要刪掉 -->
												<?php
													//create short names for variables
													$name = $_POST['name'];
													$password = $_POST['password'];
													
													$account = $_SESSION['account'];
													$cond = $_SESSION['cond'];

													echo '<br/>=====<br/>';
													echo 'account: '.$account;
													echo '<br/>cond: '.$cond;
													echo '<br/>=====<br/>';


													if(empty($name)||empty($password))
													{
														//Visitor needs to enter a name and password
														
												?>

<form class="loginForm" method ="post" action="login3.php">

				id: 
				<input class="user_id" type="text" name="name">
			
				pw:
				<input class="user_pw" type="password" name="password">		

				<button class="login_button">Login</button>

				<button class="logout_button">LogOut</button>



</form>

<a href="die.php" >Log_out</a>

												<!-- PHP 檢查帳號機制, 不准刪！-->
												<?php

											}else{





													$user_id = $_POST['name'];
													$user_pw = $_POST['password'];

													error_reporting(-1);
													include("db_conn.php");

													 // //VARIABLES 
													 $elements = "user_id";
													 $TABLES = "moubadger.user";

													 // //mysql_query("SET NAMES UTF8");
													  $query = "SELECT {$elements} FROM {$TABLES} WHERE user_pw = {$user_pw}";

													 //echo $query;
													 //echo "<br />";



													mysql_query("SET NAMES UTF8");
													$result = mysql_query($query);
													$checkRow = mysql_num_rows($result);


													//Situation that Returns nothing ->沒找到結果
													if(!$checkRow){

															$_SESSION['cond'] = 'USER_NOT_FOUND';
		        
															//echo 'USER_NOT_FOUND';
															echo '<meta http-equiv="refresh" content="0;url=login3.php" />';


													}else
													//the good Condition-> 有結果	
													{

															$userX = mysql_fetch_row($result);
															  
															echo $userX[0];
															echo '<br/>';
															echo $user_id;


															//$str_userX = (string)$userX[0];
															//$str_user_id = (string)$user_id;



															if($userX[0] == $user_id){

																	//echo 'Match! Correct';
																	echo '<center><h1>Login Success!</h1>';
																	echo '<h2>there you go.</h2>';
																	echo '<img src="http://www.iconarchive.com/icons/sykonist/peter-griffin/256/Peter-Griffin-Football-head-icon.png" ¡@align=center>';
																	$_SESSION['account']=$userX[0];
																	$_SESSION['cond']='works';
																	echo '<meta http-equiv="refresh" content="0;url=index.php" />';


															}else{

																$_SESSION['account'] = 'NOUSER';
																$_SESSION['cond'] = 'WRONG_MATCH';

																 echo '<meta http-equiv="refresh" content="0;url=login3.php" />';



															}

															//若傳回 USER 值相同
															
															//if( $userX[0] == $user_id) {
															

															// $_SESSION['account']=$user[0];
															// $_SESSION['cond']='works';
															// //$_SESSION['time']= time();


															// $account = $_SESSION['account'];
															// $cond = $_SESSION['cond'];

															// echo '<meta http-equiv="refresh" content="0;url=index.php" />';

															

															//反: 傳回 User 不相同	
														 //    }else{
														 // //    //echo "NOTFOUND";
														 //     $_SESSION['account'] = 'NOUSER';
														 //     $_SESSION['cond'] = 'WRONG_MATCH';

															//   echo '<meta http-equiv="refresh" content="0;url=login3.php" />';


															}

													}
												?>




</body>
</html>