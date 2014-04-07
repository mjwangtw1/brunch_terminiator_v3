<!-- PHP SESSION CHECK -->
<?php
	session_start();
	echo '<span class="cond">'.$_SESSION['cond'].'</span>';
	echo '<span class="user">'.$_SESSION['account'].'</span>';
	//WORKS for SESSION CHECK - flip on if you need.
	//echo '=====<br/>';
	//echo 'Session_CHECK: <br/>';
	//echo '<br/>account: '.$_SESSION['account'];
	//echo '<br/>cond: '.$_SESSION['cond'];
	//echo '<br/>=====<br/>';


	// //back up
	// if($_SESSION['cond']=='works'){
	// 	//Condition that it works.	

	// $user = $_SESSION['account'];

	// }else{
	// //kick back user: no SESSION	
	// echo '<meta http-equiv="refresh" content="0;url=login.php" />';	

	// }


	if($_SESSION['cond']!='works'){
		//Condition that it works.	

	echo '<meta http-equiv="refresh" content="0;url=login.php" />';		
	

	}else{
	//kick back user: no SESSION	
	$user = $_SESSION['account'];

	}











?>


				<html>

				<head>
				<meta charset="utf-8">
						<title>早餐星人 Find Me Brunch! </title>

						<!-- Here need to change the CSS location -->
						<link rel="stylesheet" type="text/css" href="stylesheets/reset.css" />
						<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
				<!--		<link rel="stylesheet" type="text/css" href="stylesheets/user_status.css" /> -->
						<link rel="stylesheet" type="text/css" href="stylesheets/font-awesome.css">

				</head>		
						<body>



						<div class ="user_id_display">






<?php
		//Used for checking USER SESSION	
		//echo 'Welcome ! [ <span id="user_id">'  .$user.  '</span> ]';


?>
						</div>

	<div class="container">
		<div class="wrap">
			<header> 

				<div class="user_status">
 
  					<form class="loginForm" method="post" action="login.php">
    
   					 <span id="what_eaten">我今天吃了...</span>
    
    					<span id="login_field">
    
    						<input class="user_id" type="text" name="name" placeholder="id" required />
   					   		<input class="user_pw" type="password" name="password" placeholder = "password" required /> 
   
    						<button class="login_button" type="submit">Login</button>
    					</span><!--id="login_field"-->
      				<ul id="login_field">

      				<li><a class="buttonX member" href="member.php">[User]</a></li>
      
      				<li><a class="buttonX logout" href="die.php">登出</a></li>
      
      				</ul>
    			</div><!--class="user_status"-->




				<ul>
					<li><a href="/breakfast"><img src="assets/site-titlev2.png"></a></li>
					<li>
						<form class="form-wrapper" action="#" method="post">
							<ul>
							<li><input type="text" placeholder="今天我想吃..." required="" class="placeholder"></li>
							<li><button type="submit">找</button></li>
							</ul>
						</form>

    				<a href="die.php">Log Out</a>
    				<!--
						<form name="input" action="search_brunch.php" method="POST">
						<input type="text" name="search_input" class="searchbar" placeholder="我想要吃...">
						<input type="submit" value="找"></form>
				-->	</li>
			</header>
		<div class="clearfix"></div>
		<div id="localtime"></div>
		<div class="zone_select">

		<!-- MDFH: 請把按鈕在這邊改 這一區
		這一區的button 讓你改 -->

			<ul >
				<li data-value="海華商圈" id="get_HH">
					<img src="assets/realm/hai-hwa/s_hai-hwa-sogo.png">
				</li>
				<li  data-value="中央大學" id="get_ncu">
					<img src="assets/realm/ncu/s_ncu-night-street.png">
				</li>	
				<li data-value="中原大學" id="get_CL">
					<img src="assets/realm/cycu/s_cycu.png">
				</li>	
				<li  data-value="中壢火車站" id="get_CL_Train"> 
					<img src="assets/realm/train-station/s_train-station-tt.png">
				</li>	
				<li data-value="ALLSTORE" id="show_all_store">
					<img src="assets/realm/s_needle.png">
				</li>
			</ul>
			<div class="clearfix"></div>

		</div>


		<!-- DO NOT CHANGE the DOM below -->
		<div id="results">
		



					<div class="user_content">


					<p class="overall_spend"> 
					總計全部消費金額:

					</p>		


					<p class="user_overall_spend">

					</p>	

					<p class="SQL_View_User_Eaten">
						<table class="popular_all">

						</table>
					</p>	




<?php
			
		$user_overall_spend = 0;

		$store_visited = "none";


 		//here query ends
		//echo '<p class="user_overall_spend"> 我的總消費金額: '.$user_overall_spend.'</p>';
		//echo '<p> 看我吃過的早餐店: '.$store_visited. '</p>';

		
?>

        </div>
		<footer>Creative Commons 3.0 -姓名標示 關於早餐星人 我也要提供我吃過的早餐</footer>
</div>
	

</div>
		<div class="postscript">
			<i class="fa fa-compass"></i>
			<span class="currentPlace"></span>
		</div>		



			<!-- Here loads JS -->
			<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
			<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
			<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
			<script src="js/jquery.backstretch.min.js"></script>
			<script src="js/jquery.shuffleLetters.js"></script>




		    <script>
			//for Background imag switching
            //=====DO NOT MODIFY BELOW===FOR BACKSTRETCH SCRIPT==
					var imageList = new Array();
					function imageObject(imageUrl, imageTitle, number){
		           
		           //make an object, 
		            this.imageTitle  = imageTitle;
		            //make an array, 
		            imageList[number] = imageUrl;

		            }
					//This part define what image you want
		  			 var imageArray = new Array();
		    //====DO NOT MODIFY ABOVE==  



		    //[MDFH-background]==PASS IN IMAGE SOURCE==rule: pass in 'URL, Description, #';

		      imageArray[0] = new imageObject("assets/realm/ncu/ncu-night-street.jpg","中央大學宵夜街",0);
		      imageArray[1] = new imageObject("assets/realm/hai-hwa/hai-hwa-sogo.jpg","海華商圈",1);
		      imageArray[2] = new imageObject("assets/realm/ncu/ncu-back.jpg","中央大學後門",2);
		      imageArray[3] = new imageObject("assets/realm/cycu/cycu.jpg","中原大學",3);
		      imageArray[4] = new imageObject("assets/realm/train-station/train-station-tt.jpg","中壢火車站",4);

			</script>	



			<!-- Custom JS by MOU-do not touch-->
			<script src="js/member.js"></script>
			<script src="js/apply_backstretch.js"></script>




</body>
</html>

