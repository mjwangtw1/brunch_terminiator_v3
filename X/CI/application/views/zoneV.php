<?php
//Environments.
$SQL_Debug = FALSE;
    
if($SQL_Debug){
    echo '<br/>'.$str.'<br/>'; 
    }



?>


<section class="zone_dial">

<p><img src="/happybrunch/public/assets/realm/hai-hwa.png" alt="haihwa"></p>
<p><img src="/happybrunch/public/assets/realm/ncu.png" alt="ncu"></p>  
<p><img src="/happybrunch/public/assets/realm/ncyu.png" alt="ncyu"></p>  
<p><img src="/happybrunch/public/assets/realm/random.png" alt="random"></p>  


</section>

<section class="main_list">
<h2 class="list_title">本月最受歡迎的早餐</h2><h3 class="list_title">The Most Popular Items This Month</h3>


<?php 

  if(!$zone_result){ 
  
  echo '目前 '.$place.' 還沒有資料喔! <br/>';

  }else{

  	//表格的開頭
  	echo '<table>
			  <thead>
			    <tr>
			      <td>名稱</td>
			      <td>品牌</td>
			      <td>店名</td>
			      <td>單價</td>
			      <td>消費總額</td>
			    </tr>
			  </thead>  
			 <tbody>

  	';

    //迴圈之中. 
    foreach($zone_result as $zone_details){

     //這邊把資料存成 format
       $zone_item_name = $zone_details['名稱'];
      $zone_brand_name = $zone_details['品牌'];
      $zone_store_name = $zone_details['店名'];
      $zone_item_price = $zone_details['單價'];
     $zone_total_price = $zone_details['消費總額'];




     echo '<tr><td>'.$zone_item_name.'</td><td>'.
                $zone_brand_name.'</td><td>'.
                $zone_store_name.'</td><td>'.
                $zone_item_price.'</td><td>'.
                $zone_total_price.'</td></tr>'; 



    }//迴圈結束
    

     //表格收尾    
     echo '</tbody></table>';


  }//end else case


?>



</section>