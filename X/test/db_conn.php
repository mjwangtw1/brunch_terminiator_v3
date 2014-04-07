<?php
	error_reporting(-1);
	header('Content-type: text/html; charset=utf-8'); 


	$DB_HOST 		= "localhost";
	$DB_LOGIN 		= "moubadger";
	$DB_PASSWORD 	= "799799527";
	$DB_NAME        = "moubadger";

	//$conn = mysql_connect($DB_HOST,$DB_LOGIN,$DB_PASSWORD);

	//check if CONNECT correct
	if(!mysql_connect($DB_HOST,$DB_LOGIN,$DB_PASSWORD)){
		 die("Can't connect to database");
	}
	//check if DB selected!
	if(!mysql_select_db($DB_NAME)){
		die("Can't select database");
	}

	//mysql_set_charset('utf-8',$conn);



?>