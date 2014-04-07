<!--PHP SESSION 啟動 -->
<?php session_start(); 


//Detect if User Logged-In, display different data
if(($_SESSION['account']=='ALL')||($_SESSION['account']=='')){

//Means that user did not log in
  //$user = $_SESSION['account'];
  $user = 'ALL';

}else{

  $user = $_SESSION['account'];



}

//echo $_POST['pageFrom'];


if($_POST['pageFrom']==''){

  $pageFrom = "ALLSTORE";

}else{

  $pageFrom = $_POST['pageFrom'];
   

}


  echo '<span class="page" style="display: none;">'.$pageFrom.'</span>';
  echo '<span class="locEng" style="display: none;">'.$_POST['locEng'].'</span>';
  echo '<span class="user" style="display: none;">'.$user.'</span>';
  //echo '<span class="zone_sum_user">'.$zone_sum_user.'</span>';



?>







<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="stylesheets/reset.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/style_zone.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/user_status.css" />
	</head>
<body>
	<div class="container">
		<div class="wrap">



      <div class="user_status">
 
            <form class="loginForm" method="post" action="login.php">
    
             <span id="what_eaten">我今天吃了...</span>
    
              <span id="login_field">
    
                <input class="user_id" type="text" name="name" placeholder="id" required />
                  <input class="user_pw" type="password" name="password" placeholder = "password" required /> 
   
                <button class="login_button" type="submit">Login</button>
              </span><!--id="login_field"-->
      
              <a class="buttonX member" href="member.php">[User]</a> 
      
              <a class="buttonX logout" href="die.php">Logout</a>  
      
       </div><!--class="user_status"-->












			<div class="contents">
				<div>
				    <p><img id="zone_icon" src=""></p>
				    <p class="zone_show">在海華商圈消費的金額總共：</p><p class="price_total">5,566元</p>
				</div>
				<div>
          <div id="map"></div>
        </div>
				<div class="clearfix"></div>
				<div id="results">



          <p class="SQL_View_User_Eaten">

          </p>  





				</div>
        <!--div id="results"-->

			</div><!--div class="contents"-->




			<div class="clearfix"></div>
			
	   	   <footer>Creative Commons 3.0 -姓名標示 關於早餐星人</footer>





</div><!-- div class="wrap"-->
            <div class="postscript">
            <img src="assets/compass.png" alt="照片地點">
        <span class="currentPlace"></span>
       </div><!--div class="postscript"-->

</div><!-- div class="container"-->
  



		<!-- Javascripts -->

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="js/gmaps.js"></script>

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
             
             //var pageFrom ='index';
      //=====DO NOT MODIFY ABOVE===FOR BACKSTRETCH SCRIPT==  

      </script>

      <!-- Custom JS by MOU-do not touch-->     
      <script src="js/allStretch.js"></script>
      <script src="js/byZone.js"></script>
      <script src="js/apply_backstretch.js"></script>
      



</body>
</html>

