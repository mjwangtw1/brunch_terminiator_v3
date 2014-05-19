<?php
//Environments.
$SQL_SEE_QUERY = FALSE;

?>

zoneV.php | I am zoneV page | /view/zoneV.php  <br/>

[ <?php echo $place?>   ] <br/>



<img src=" <?php echo $PNGurl  ?>" background-position="background-position: -136px 0;"     >		<br/>





<div="circle_icon"  >

<img src="  <?php echo $all_circles?> " style="background-position:<?php echo $img_pos?> width:137px; height:137px;" >  <br/>

</div>

<?php echo $img_pos ?> <br/>

=======HERE SHOWS Query Result =====	<br/>	
<?php 
    //debug message, to see, change $SQL_SEE_QUERY to TRUE
    if($SQL_SEE_QUERY){
    echo '<br/>'.$str.'<br/>'; 
    }

    foreach($zone_cal_sum as $zone_val){

    echo '<br/>本區消費總額: '.$zone_val['本區消費總額'].'<br/>';

  }




?> 


<?php 

  if(!$zone_result){
  
  echo '目前 '.$place.' 還沒有資料喔! <br/>';

  }else{

    foreach($zone_result as $zone_details){


     //這邊把資料存成 format
     $zone_item_name =  $zone_details['名稱'];
     $zone_brand_name = $zone_details['品牌'];
     $zone_store_name = $zone_details['店名'];
     $zone_item_price = $zone_details['單價'];
     $zone_total_price = $zone_details['消費總額'];




     //這邊把變數用echo 印出來, MDFH 你要改
     //MDFH 在這邊改layout
     echo $zone_item_name.","
       .$zone_brand_name.","
       .$zone_store_name.","
       .$zone_item_price.","
       .$zone_total_price.'<br/>';


    }//endforeach 
    





  }//end else case


?>

<!--old method, do not use
                                  <?php foreach ($zone_result as $zone_details): ?>

                                     	 <?php echo $zone_details['名稱'].","
                                     	           .$zone_details['品牌'].","
                                     	           .$zone_details['店名'].","
                                     	           .$zone_details['單價'].","
                                     	           .$zone_details['消費總額'];
                                     	 ?>
                                     <br />
                                  <?php endforeach?>
-->


=======HERE SHOWS Query Result =====	<br/>

[Here shows Background Image] <br/>

<img src=" <?php echo $BG_image  ?>">	



