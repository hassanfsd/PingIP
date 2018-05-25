<?php
$con = mysql_connect("localhost" ,"root" , "" );//hostname, host username , host password
$db = mysql_select_db("ping" , $con);
$system = ini_get('system');
$res=mysql_query("select * from pingip");
while($row=mysql_fetch_array($res)) {
	$ip = $row['ip'];
	$name = $row['name'];
	$pingreply = exec("ping -n 2 $ip");
	if (substr($pingreply, -2) == 'ms') {
		$sql = "UPDATE pingip SET status = 'Y', ping_replay = '$pingreply' WHERE ip = '$ip'";
		mysql_query($sql);
		} 
		else {
		$sql = "UPDATE pingip SET status = 'N', ping_replay = '$pingreply' WHERE ip = '$ip'";
		mysql_query($sql);
		     }
}
?>
