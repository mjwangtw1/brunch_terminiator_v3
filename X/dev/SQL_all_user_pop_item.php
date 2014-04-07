
<?php

    //$store_id = $_POST['store'];
    $user_id = $_POST['user_id'];
    //This is Must Have for PROCESSING!
    $user_id = '"'.$user_id.'"';


    error_reporting(-1);
    include("db_conn.php");

// SELECT 
//   FROM 
//  WHERE store_info.store_id = menu.store_id 
//    AND menu.item_id = eaten_item_list.item_id
// ORDER BY qty DESC;






    //$elements = "item_name as '早餐商品', item_desc as '商品內容', item_price as '價格', qty as '數量',date as '日期', time as '時間', B.item_id  ";

    $elements = "menu.item_name as '名稱',store_info.zone as '區域', store_info.brand as'品牌',store_info.name as '店名', menu.item_price as '單價', eaten_item_list.qty*menu.item_price as '消費總額'";

    $TABLES = "moubadger.menu, moubadger.store_info, moubadger.eaten_item_list";

    $RULES1 = "store_info.store_id = menu.store_id ";

    $RULES2 = "menu.item_id = eaten_item_list.item_id";

    $EXTRA = "ORDER BY qty DESC";

    //mysql_query("SET NAMES UTF8");
    $query = "SELECT {$elements} 
                FROM {$TABLES} 
               WHERE {$RULES1}
                 AND {$RULES2}
                 $EXTRA " ;

    // sending query
    mysql_query("SET NAMES UTF8");

    $result = mysql_query($query);


        $checkRow = mysql_num_rows($result);

        //Situation that Returns nothing
        if(!$checkRow){
        
                $json_data = array(
                   'query_result'=>'no_result'
                  ,'query_elements_count'=>$checkRow
                  ,'query'=>$query
                  ,'flagData'=>$flag
                  ,'debug'=>$debug
                  );

            
        }else{

                // $checkRow = 1;




                $json_data = array(

                             'query_result'=>'success'
                            ,'query_elements_count'=>$checkRow
                            ,'query'=>$query
                            ,'flagData'=>$flag
                            ,'debug'=>$debug


                            );

                $fields_num = mysql_num_fields($result);

                $contex = array();
        
                $q=0;
                 //While to Loop thru every ROW 
                while($row = mysql_fetch_array($result))
                {                
                     $contex[$q] = $row;

                      //push what you have created in Array to JSON
                    array_push($json_data,$contex[$q]);
                      $q++;   
                }

                //注意: 要存取 $contex[0]
                //在JS 那側, 要取 Object[0]




               // $test_array = array();

               // $test_array[0] = "帥哥FBI";

               // $test_array[1] = "鄧家華";

               // $row = mysql_fetch_array($result);

               // $test_array[2] = $row;

               //  // $test_array[0] = array(

               //  //   [0] => "哈哈"
               //  //   [1] => "科科"
               //  //   [2] => "帥哥FBI"

               //  //   );
               //  // $test_array[1] = ("鄧家華",9527);   

               //   array_push($json_data,$test_array[0]);
               //   array_push($json_data,$test_array[1]);
               //   array_push($json_data,$test_array[2]);


        }//the end of else loop



        echo json_encode($json_data);
        die();


mysql_free_result($result);










?>