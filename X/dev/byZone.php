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


  echo '<span class="page">'.$pageFrom.'</span>';
  echo '<span class="locEng">'.$_POST['locEng'].'</span>';
  echo '<span class="user">'.$user.'</span>';
  //echo '<span class="zone_sum_user">'.$zone_sum_user.'</span>';



?>







<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>海華商圈的早餐店（早餐星人）</title>

    <!--
		<link rel="stylesheet" type="text/css" href="/breakfast/stylesheets/reset.css" />
		<link rel="stylesheet" type="text/css" href="/breakfast/stylesheets/style_zone.css" />

    -->
    <link rel="stylesheet" type="text/css" href="stylesheets/reset.css" />
      <link rel="stylesheet" type="text/css" href="stylesheets/style_zone.css" />

	</head>
<body>
	<div class="container">
		<div class="wrap">
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


			</div>




			<div class="clearfix"></div>
			
	   	   <footer>Creative Commons 3.0 -姓名標示 關於早餐星人</footer>



        <div class="postscript">
            <img src="assets/compass.png" alt="照片地點">
        <span class="currentPlace"></span>
       </div>

</div>
    
</div>
  



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

