<!-- PHP SESSION CHECK -->
<?php
	session_start();
	echo '<span class="cond">'.$_SESSION['cond'].'</span>';
	echo '<span class="user">'.$_SESSION['account'].'</span>';


	if($_SESSION['cond']!='works'){
		//Condition that it works.	

	echo '<meta http-equiv="refresh" content="0;url=index.php" />';		
	

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

      				<li><a class="logging" id="my_log">我的早餐記錄</a></li>

      				<li><a href="die.php">登出</a></li>
      
      				</ul>
    			</div><!--class="user_status"-->




				<ul>
					<li><a href="/breakfast"><img src="assets/site-titlev3.png"></a></li>

						<form class="form-wrapper" action="#" method="post">
							<ul>
							<li><input type="text" placeholder="今天我想吃..." required="" class="placeholder"></li>
							<li><button type="submit">找</button></li>
							</ul>
						</form>

			</header>
		<div class="clearfix"></div>

		<!--Here do the ADD_what_eaten Part-->
		<div id="add_box">
					 
					    <div class="zone_list">    
					        <div class="train_station">[中壢火車站]</div>
					            

					            <div id="t_s_zone_stores" class="stores">
					        
					                <a id="t_s_store_1">[ KFC-火車站 ]</a>
					                <a id="t_s_store_2">[ 麥當奴-火車站 ]</a>
					                <a id="t_s_store_3">[ 大蛋餅-火車站 ]</a>        
					                
					            </div>    
					                
					        <div class="ncu">[中央大學]</div>
					    
					        
					            <div id="ncu_zone_stores" class="stores">
					                <a id="ncu_store_1">[ 吉米熊-中央大學 ]</a> 
					                <a id="ncu_store_2">[ Amo-中央大學 ]</a> 
					                <a id="ncu_store_3">[ 惟客早餐-中央大學 ]</a> 

					            </div>
					        
					        
					        <div class="hai_hua">[海華商圈]</div>
					        

					        
					            <div id="hai_hua_zone_stores" class="stores">
					                <a id="hai_hua_store_1">[ 哈飽堡-海華商圈 ]</a> 
					                <a id="hai_hua_store_2">[ 早！美味-海華商圈 ]</a> 
					                <a id="hai_hua_store_3">[ 慈惠三街餐車-海華商圈 ]</a> 

					            </div>
					        
					        
					        
					        <div class="cycu">[中原大學]</div>
					        
					        <div id="cycu_zone_stores" class="stores">
					                <a id="cycu_store_1">[ 哈飽堡-中原大學 ]</a> 
					                <a id="cycu_store_2">[ 早！美味-中原大學 ]</a> 
					                <a id="cycu_store_3">[ 慈惠三街餐車-中原大學 ]</a> 

					            </div>
					        
					            
					    </div> 



</div>
		<!--Here do the ADD_what_eaten Part-->

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

