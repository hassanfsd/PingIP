<?php
require('includes/pingupdater.php');
?>
<!Doctype html>
<html>
   <head>
   <title>Ping Monitor</title>
	<link rel="icon" href="images/logo 02.png" type="image/png" />
   <link href="css/styles.css" type="text/css" rel="stylesheet" />
   <link href="css/table.css" type="text/css" rel="stylesheet" />
	  <script type="text/JavaScript">
       function AutoRefresh( t ) {
            setTimeout("location.reload(true);", t);
        }
	</script>      
   </head>
<body onload="JavaScript:AutoRefresh(15000);">
<div id="header">
<a href="index.php" alt="Go to Home"><div id="headimg">
    	<img src="images/GCUF_Logo.png" height="120px" width="120px"/>
    </div>
    <div id="title">    
        <h1 class="ping"> Ping Cheacking Monitor </h1>
        <h2 class="ping" id="up"> Government College Uniersity Faisalabad </h2>
    </div></a>
    <div id="newip">
    	<a href="addip.php" target="_self" title="Add new Ip">Add New IP</a>    
			 <br>
      <a href="data.php" target="_self" title="View IP List">Update/Delete</a>    
  </div>         
</div>
<table class="CSSTableGenerator" style="margin-top:25px;" width="100%" border="1px" cellpadding="2" cellspacing="0"> 
  <tr>
    <th width="5%" scope="col">Sr. No</th>
    <th width="13%" style="text-align: left" scope="col">Device Name</th>
    <th width="11%" scope="col">Device IP</th>
    <th width="24%" style="text-align: left" scope="col">Device Location</th>
    <th width="7%" scope="col">Status</th>
    <th width="31%" align="left" style="text-align: center" scope="col">Ping Result</th>
    <th width="9%" scope="col" style="text-align: center">Last Update</th>
  </tr>
<?php	
$sql1=mysql_query("select * from pingip order by status");
$i=1;
while($row=mysql_fetch_array($sql1))
{
?>  
  <tr <?php if($row['status'] == 'N') echo 'style="background:#FF7171; color:#ffffff; font-weight:bold; "';?> >
    <td style="text-align: center"><?php echo $i; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td stylxe="text-align: center"><?php echo $row['ip']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td style="text-align: center">
	<?php  
		if($row['status'] == 'Y') {
			echo "Running";
		} else {
			echo "Stopped";
		} ?></td>
    <td style="text-align: center"><?php echo $row['ping_replay']; ?></td>
    <td style="text-align: center">
	<?php 
		$time = $row['last_update'];
		$last_update = date_format(date_create($time), 'h:i A');
		echo $last_update;
	?></td>
  </tr>
<?php 
$i++;  
}  
?>
</table>
<div align="center">
<h5 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:16px;">Department of IT Services<br>Government College University Faisalabad</h5>
</div>
</div>
</body>
</html>