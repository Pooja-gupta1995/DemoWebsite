<?php

// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("hello") or die(mysql_error());

if(isset($_REQUEST['submit']))
{
	// create a variable
 
$education=$_REQUEST["education"];
$b=implode(",",$education);
 
 mysql_query("INSERT INTO pooja (education) VALUES ('$b')");     

         

}

?>