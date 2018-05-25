<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$ip=$_GET['ip'];
$con = mysql_connect("localhost" ,"root" , "" );//hostname, host username , host password
$db = mysql_select_db("ping" , $con);

$del=mysql_query("delete from pingip where ip= '$ip' ");
if(!$del)
{
	echo mysql_error();
}
else
	header("location:data.php");

?>
</body>
</html>