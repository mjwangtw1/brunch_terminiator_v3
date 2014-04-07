<!-- PHP SESSION CHECK -->
<?php
	session_start();

	$pageFrom = 'index';
	$user = $_SESSION['account'];

	echo '<span class="page">'.$pageFrom.'</span>';
	echo '<span class="user">'.$user.'</span>';
?>


<html>

<head>
	<meta charset="utf-8">
	<title>早餐星人 HappyBrunch.in </title>
</head>		
<body>
<div class ="user_id_display">

</div><!-- class ="user_id_display"-->

	<div class="container">
		<div class="wrap">
			<header> 

				<div class="user_status">
    					
						

    					<form class="loginForm" method ="post" action="login.php">

    					<span id="what_eaten">我今天吃了...</span>	
    						
						id: 
						<input class="user_id" type="text" name="name">
			
						pw:
						<input class="user_pw" type="password" name="password">		

						<button class="login_button">Login</button>




						</form>

						<span id="user_account">

						</span>	
	    					<a href="die.php">Log Out</a>


    				</div> <!--class="user_status" end-->





				<ul>
					<li><a href="/breakfast"><img src="assets/site-titlev2.png"></a></li>
					<li>
					<form class="form-wrapper" action="#" method="POST">
        				<input type="text" placeholder="今天我想吃..." required class="placeholder">
        				<button type="submit">找</button>
    				</form>


    				
	</li>
			</header>
		<div class="clearfix"></div>
		<div id="localtime"></div>

		<div class="zone_select">

			<!-- MDFH: 請把按鈕在這邊改 這一區
			這一區的button 讓你改 -->
			
				<ul >
					<li data-value="海華商圈" id="hai_hwa">
						<img src="assets/realm/hai-hwa/s_hai-hwa-sogo.png">
					</li>
					<li  data-value="中央大學" id="ncu">
						<img src="assets/realm/ncu/s_ncu-night-street.png">
					</li>	
					<li data-value="中原大學" id="cycu">
						<img src="assets/realm/cycu/s_cycu.png">
					</li>	
					<li  data-value="中壢火車站" id="train_station"> 
						<img src="assets/realm/train-station/s_train-station-tt.png">
					</li>	
					<li data-value="ALLSTORE" id="show_all_store">
						<img src="assets/realm/s_needle.png">
					</li>
				</ul>
			<div class="clearfix"></div>
			
			<!--	temp turned off
			<input type="checkbox" id="checkOnlyRunning" />只顯示現在還開門的
			-->

		</div><!--class='zone_select' end-->
			

		<!-- DO NOT CHANGE the DOM below -->
		<div id="results">
		



					<div class="user_content">


					<p class="overall_spend"> 
					這個月最多人吃的早餐:

					</p>		


					<p class="user_overall_spend">

					</p>	

					<p class="SQL_View_User_Eaten">

					</p>	




											<?php		
													$user_overall_spend = 0;
													$store_visited = "none";

													
											?>

			        </div>	<!--class= 'user_content' end-->

			<footer>Creative Commons 3.0 -姓名標示 關於早餐星人 我也要提供我吃過的早餐</footer>
		
		</div><!--id='results' end-->
		
	

	</div><!--class='wrap' end-->
		

		<div class="postscript">
			<img src="assets/compass.png" alt="照片地點">
			<span class="currentPlace"></span>
		</div><!--class='postscript' end-->



			<!-- Here need to change the CSS location -->
			<link rel="stylesheet" type="text/css" href="/stylesheets/reset.css" />
			<link rel="stylesheet" type="text/css" href="/stylesheets/style.css" />


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
					function imageObject(number,imageTitle,imageUrl){
		           
		           //make an object, 
		            this.imageTitle  = imageTitle;
		            //make an array, 
		            imageList[number] = imageUrl;

		            }
					//This part define what image you want
		  			 var imageArray = new Array();
		    //====DO NOT MODIFY ABOVE==  
		    var pages = 'index';


		    //[MDFH-background]==PASS IN IMAGE SOURCE==rule: pass in 'URL, Description, #';

		      // imageArray[0] = new imageObject("assets/realm/ncu/ncu-night-street.jpg","中央大學宵夜街",0);
		      // imageArray[1] = new imageObject("assets/realm/hai-hwa/hai-hwa-sogo.jpg","海華商圈",1);
		      // imageArray[2] = new imageObject("assets/realm/ncu/ncu-back.jpg","中央大學後門",2);
		      // imageArray[3] = new imageObject("assets/realm/cycu/cycu.jpg","中原大學",3);
		      // imageArray[4] = new imageObject("assets/realm/train-station/train-station-tt.jpg","中壢火車站",4);

			</script>





		
			<!-- Custom JS by MOU-do not touch-->
			<script src="js/index.js"></script>
			<script src="js/allStretch.js"></script>
			<script src="js/apply_backstretch.js"></script>
			






</body>
</html>

