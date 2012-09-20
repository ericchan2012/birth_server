<?php
header("Content-Type: text/html; charset=UTF-8");
define('SUCCESS', 1);
define('FAILURE', 0);
$number = $_GET['number'];
$passwd = $_GET['passwd'];

include ("conn.php");
$sql = "SELECT * FROM users where phone='$number' and passwd='$passwd'";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
if ($num_rows == 0) {
	echo FAILURE; //login fail
} else {
//	echo SUCCESS; //login success
	$row = mysql_fetch_array($result);
	$array = array (
		'id' => $row[0],
		'name' => $row[1],
		'passwd' => $row[2],
		'gender' => $row[3],
		'phone' => $row[4]
	);
	echo urldecode(json_encode($array));
}
?>
