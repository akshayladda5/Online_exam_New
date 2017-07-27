<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test Data View</title>
</head>

<body>

<h1 align="center">List of Test</h1>
<body>

<!--main container star -->
<!-- navagation bar starts -->
<div class="post_area">
  
<div id="wrapper">

<div id="tblView">
<table width='850' align='center' border='1'>
    
     <tr bgcolor='white'>
     
        <th bgcolor="white">Test ID</th>
        <th>Subject ID</th>
		<th>Test Name</th>
		 <th>Total Question</th>
        <th>Update</th>
        <th>Delete</th>
        
       </tr>
       
     <tr align='center'>
        
   <?php
        
 mysql_connect("localhost","root","");
 mysql_select_db("quiz_new");

   $query = "select  * from mst_test" ;
   
   $run = mysql_query($query);
   
   while ($row = mysql_fetch_array($run)){
   
    $test_id= $row[0];
    $sub_id = $row[1];
	$test_name = $row[2];
	$total_que = $row[3];
	
   ?>        
        <tr align='center'>
	<td><?php echo $test_id;?></td>
	<td><?php echo $sub_id;?></td>
	<td><?php echo $test_name;?></td>
	<td><?php echo $total_que;?></td>
	
  
  <td><a href='testupdate.php?upd=<?php echo $test_name;?>'>Update</a></td>
  <td><a href='deltest.php?del=<?php echo $test_id;?>'>Delete</a></td>
  
     </tr>
     
    <?php  } ?>
    </tr>
    </table>
    </div>
</div>
<!-- main container end -->
</body>
</html>