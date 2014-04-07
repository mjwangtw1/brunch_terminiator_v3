
<?php

    //$store_id = $_POST['store'];
    $user_id = $_POST['user_id'];
    //This is Must Have for PROCESSING!
    $user_id = '"'.$user_id.'"';


    error_reporting(-1);
    include("db_conn.php");

    //$elements = "item_name as '早餐商品', item_desc as '商品內容', item_price as '價格', qty as '數量',date as '日期', time as '時間', B.item_id  ";

    $elements = "item_name as '早餐商品', item_desc as '商品內容', item_price as '價格', qty as '數量',date as '日期', time as '時間'";


    $TABLES = "moubadger.all_user_info as A, moubadger.menu as B";

    //mysql_query("SET NAMES UTF8");
    $query = "SELECT {$elements} FROM {$TABLES} WHERE A.item_id = B.item_id
                 AND user_id = {$user_id}" ;

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