<footer>


<ul>
	<li><a href="#" class="cc-by-sa">Creative Commons 姓名標示</a> Happybrunch.in/中壢 2013-2014</li>
	<li></li>
	<li></li>
</ul>

</footer>
</div> <!-- end of .container -->

<?php

	// PUBLIC_PATH =  '/happybrunch/public'
	// if modify -> /config/constants.php to modify

	$js_url = PUBLIC_PATH.'javascripts';
	$css_url = PUBLIC_PATH.'stylesheets';
?>

	<link rel="stylesheet" type="text/css" href="<?php echo $css_url ?>/style.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo $css_url ?>/font-awesome.css">	

 <!-- Here loads the javascript and CSS-->

	<script src="<?php echo $js_url ?>/jquery.min.js"></script>
 <!--   <script src="<?php echo $js_url ?>/index.js"></script> -->
    <script src="<?php echo $js_url ?>/jquery.backstretch.min.js"></script>

	<script>
	$(document).ready(function()
	{

  $.backstretch([
      "/happybrunch/public/assets/realm/background/hai-hwa-sogo.jpg"
    , "/happybrunch/public/assets/realm/background/ncu-back.jpg"
    , "/happybrunch/public/assets/realm/background/ncu-night-street.jpg"
  ], {duration: 16000, fade: 750});
	});


	</script>


 <!--   <script src="<?php echo $js_url ?>/allStretch.js"></script> -->
 <!--   <script src="<?php echo $js_url ?>/apply_backstretch.js"></script> -->

 <!-- JS/CSS load ends-->
</body>
</html>
