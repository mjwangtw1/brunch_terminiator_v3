<!-- PHP SESSION CHECK -->
<?php
	session_start();

	$pageFrom = 'index';
	$user = $_SESSION['account'];

	echo '<span class="page">'.$pageFrom.'</span>';
	echo '<span class="user">'.$user.'</span>';
?>
<?php include 'header.php'; ?>

				<div class="zone_select">
					<!-- MDFH: 請把按鈕在這邊改 這一區
			這一區的button 讓你改 -->
					<ul>
						<li data-value="海華商圈" id="hai_hwa" class="realm-s_hai-hwa-sogo"></li>
						<li data-value="中央大學" id="ncu" class="realm-s_ncu-night-street"></li>
						<li data-value="中原大學" id="cycu" class="realm-s_cycu"></li>
						<li data-value="中壢火車站" id="train_station" class="realm-s_train-station-tt"></li>
						<li data-value="ALLSTORE" id="show_all_store" class="realm-s_needle"></li>
					</ul>
					<div class="clearfix"></div><!--    temp turned off
			<input type="checkbox" id="checkOnlyRunning" />只顯示現在還開門的
			-->
				</div><!--class='zone_select' end-->
				<!-- DO NOT CHANGE the DOM below -->
				<div id="results">
					<div class="user_content">
						<p class="overall_spend">
							這個月最多人吃的早餐:
						</p>
						<p class="user_overall_spend"></p>
						<p class="SQL_View_User_Eaten"></p>
					</div><!--class= 'user_content' end-->
					<footer>
						<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/tw/" target="_blank"><img alt="創用 CC 授權條款" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/tw/80x15.png" /></a><br />本著作係採用<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/tw/">創用 CC 姓名標示-相同方式分享 3.0 台灣 授權條款</a>授權. 關於早餐星人 我也要提供我吃過的早餐
					</footer>

				</div><!--id='results2' end-->
			</div><!--class='wrap' end-->
			<div class="postscript">
				<i class="fa fa-compass"></i>
				<span class="currentPlace"></span>				
			</div>
			<!--class='postscript' end-->
			<!-- Here need to change the CSS location -->
			<!-- Here loads JS -->
			<script src="http://code.jquery.com/jquery-1.10.0.min.js" type="text/javascript"></script>
			<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
			<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js" type="text/javascript"></script>
			<script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
			<script src="js/jquery.shuffleLetters.js" type="text/javascript"></script>

			<script type="text/javascript">
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

			</script> <!-- Custom JS by MOU-do not touch-->
			<script src="js/index.js" type="text/javascript"></script>
			<script src="js/allStretch.js" type="text/javascript"></script>
			<script src="js/apply_backstretch.js" type="text/javascript"></script>
		</div>
	</body>
</html>