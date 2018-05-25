
<!Doctype html>
<html>
	<head>
	   <title>Ping Monitor Ip List</title>
	<link rel="icon" href="images/logo 02.png" type="image/png" />
   <link href="css/styles.css" type="text/css" rel="stylesheet" />
   <link href="css/table.css" type="text/css" rel="stylesheet" />
    </head>
<body>
<div id="header">
	<a href="index.php" alt="Go to Home"><div id="headimg">
    	<img src="images/GCUF_Logo.png" height="120px" width="120px"/>
    </div>
    <div id="title">    
        <h1 class="ping"> Ping Cheacking Monitor </h1>
        <h2 class="ping" id="up"> Government College Uniersity Faisalabad </h2>
    </div></a>
</div>
	
<table class="CSSTableGenerator" style="margin-top:25px;" width="500" border="1px" cellpadding="2" cellspacing="0"> 
  <tr>
    <th width="6%" scope="col">Sr. No</th>
    <th width="12%" style="text-align: left" scope="col">Device Name</th>
    <th width="12%" scope="col">Device IP</th>
    <th width="51%" style="text-align: left" scope="col">Device Location</th>
    <th width="9%" style="text-align: center" scope="col">Edit</th>
	<th width="10%" style="text-align: center" scope="col">Delete</th>
  </tr>
<?php	
$con = mysql_connect("localhost" ,"root" , "" );//hostname, host username , host password
$db = mysql_select_db("ping" , $con);  
$sql1=mysql_query("select * from pingip");
$i=1;
while($row=mysql_fetch_array($sql1))
{
?>  
  <tr>  
    <td style="text-align: center"><?php echo $i; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td stylxe="text-align: center"><?php echo $row['ip']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td  style="text-align: center"><a href="updateip.php ?ipaddr=<?php echo $row['ip']; ?>">Edit</a></td>
    <td  style="text-align: center"><a href="delete.php ?ip=<?php echo $row['ip']; ?>">Delete</a></td>
  </tr>
  <?php 
$i++;  
}  
?>
</table>
<div align="center">
<h5 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:16px;">Department of IT Services<br>Government College University Faisalabad</h5>
</div>

</body>
</html>