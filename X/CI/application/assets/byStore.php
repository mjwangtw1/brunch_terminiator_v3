<?php

$weekarray=array("日","一","二","三","四","五","六");
echo "今天星期".$weekarray[date("w")];
echo "<br/>";

date_default_timezone_set('Asia/Taipei');

$t=time();
echo date("Y-m-d H:i:s",$t);




error_reporting(-1);
header('Content-type: text/html; charset=utf-8'); 

$db_host = 'localhost';
$db_user = 'moubadger';
$db_pwd = '98778998';

$database = 'moubadger';
$table = 'storelist';

    //$zone = "NCU";
    $zone = $_POST["zone"];
    //echo $zone;
    $zone = '"'.$zone.'"';

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");

// sending query
mysql_query("SET NAMES UTF8");

if($zone == '"X"'){

    $result = $result = mysql_query("SELECT * FROM {$table} ");

}else{
    
    $result = mysql_query("SELECT * FROM {$table} WHERE zone = {$zone}");

}


if (!$result) {
    die("Query to show fields from table failed");
}

$fields_num = mysql_num_fields($result) + 1 ;

$title = array("編號","品牌","店名","郵遞區號","區域","地址","電話","營業時間","圖片","座標","備註");


//echo "<h1>Table: {$table}</h1>";
echo "<br />";
echo "<table border='1'><tr>";
// printing table headers

// for($i=0; $i<$fields_num; $i++)
// {
//     echo "<td>{$title[i]}</td>";
// }


for($i=0; $i<$fields_num; $i++)
{
    $field = mysql_fetch_field($result);
    //echo "<td>{$field->name}</td>";
    //echo "<td>$title[i]</td>";
    echo "<td>";
    echo $title[$i];
    echo "</td>";


}
echo "</tr>\n";
// printing table rows
while($row = mysql_fetch_row($result))
{
    echo "<tr>";

    // $row is array... foreach( .. ) puts every element
    // of $row to $cell variable
    foreach($row as $cell)
        echo "<td>$cell</td>";
        echo "<td>看Menu</td>";

    echo "</tr>\n";
}
mysql_free_result($result);
?>