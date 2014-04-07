
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




    if (!$result) {
        die("Query to show fields from table failed");
    }

    echo "<br />";
    echo "<table border='1'><tr>";


    //Add this if you want Titles
    $fields_num = mysql_num_fields($result);
    for($i=0; $i<$fields_num; $i++)
    {
        $field = mysql_fetch_field($result);
        //echo "<td>{$field->name}</td>";
        //echo "<td>$title[i]</td>";
        //echo "<td>";
        //echo $title[$i];    
        echo "<td>{$field->name}</td>";

        //echo "</td>";

    }   
    echo "</tr>\n";


    while($row = mysql_fetch_row($result))
    {
        echo "<tr>";

   // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";
        //echo "<td>看Menu</td>";

    echo "</tr>\n";
}
mysql_free_result($result);










?>