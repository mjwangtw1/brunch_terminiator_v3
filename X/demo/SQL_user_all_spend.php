
<?php

    
    $user_id = $_POST['user_id'];
    //This is Must Have for PROCESSING!
    $user_id = '"'.$user_id.'"';

    error_reporting(-1);
    include("db_conn.php");

    $elements = "sum(item_price*qty)";
    $TABLES = "moubadger.all_user_info as A, moubadger.menu as B";

     //mysql_query("SET NAMES UTF8");
     $query = "SELECT {$elements} FROM {$TABLES} WHERE A.item_id = B.item_id
                  AND user_id = {$user_id}" ;

    // sending query
    mysql_query("SET NAMES UTF8");

    $result = mysql_query($query);

    //echo $query;

    $checkRow = mysql_num_rows($result);

        //Situation that Returns nothing
        if(!$checkRow){
            //echo "NOTFOUND";

            echo "NOTFOUND";

        }
        else
        {

           //var $shit = "X";

            $amount = mysql_fetch_row($result);            
            echo $amount[0];
            // var $return = $amount[0];
            // echo $return;

            //echo $query;

         // while($row = mysql_fetch_row($result)){
         //   echo $row;

         // }

        //echo mysql_result($result,0);
         


        }



mysql_free_result($result);


?>