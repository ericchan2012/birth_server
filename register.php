<?php
header("Content-Type: text/html; charset=UTF-8");
define('SUCCESS', 1);
define('FAILURE', 0);
$phone_number = $_GET['number'];
$passwd = $_GET['passwd'];
$name = $_GET['name'];

include ("conn.php");
$query_sql = "SELECT * FROM users where phone='$phone_number'";
$query_result = mysql_query($query_sql);
$query_rows = mysql_num_rows($query_result);
if ($query_rows != 0) {
	echo FAILURE;
} else {
	$insert_sql = "INSERT INTO users (name, passwd,phone)
VALUES ('$name', '$passwd', '$phone_number')";
	mysql_query($insert_sql);
	$insert_id = mysql_insert_id();
	echo $insert_id;
}
mysql_close($conn);
//$array = array (
//	'title' => 'TTT',
//	'id' => 1,
//	'value' => urlencode("哈哈")
//);
//echo urldecode(json_encode($array));
?>