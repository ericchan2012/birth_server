<?php
/*
 * Created on Sep 20, 2012
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 $user = "root";
$pass = "";
$db = "birth";
$conn = mysql_connect("localhost", $user, $pass);
if (!$conn) {
	die("Couldn't connect to MySQL: " . mysql_error());
	echo FAILURE;
}

mysql_select_db($db, $conn) or die("Couldn't open $db: " . mysql_error());
?>
