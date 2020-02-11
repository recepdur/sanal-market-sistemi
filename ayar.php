<?php

$dbservertype='mysql';
$servername='localhost';
$dbusername='root';
$dbpassword='123456';
$dbname='veriler';

connecttodb($servername,$dbname,$dbusername,$dbpassword);
function connecttodb($servername,$dbname,$dbuser,$dbpassword)
{
	global $link;
	$link = mysql_connect ("$servername","$dbuser","$dbpassword")
		or die("Could not connect to MySQL");
	mysql_select_db("$dbname",$link) 
		or die ("could not open db".mysql_error());
	
	mysql_query("SET NAMES 'UTF8'");
	mysql_query("SET character_set_connection = 'UTF8'");
	mysql_query("SET character_set_client = 'UTF8'");
	mysql_query("SET character_set_results = 'UTF8'");

}
?>