<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question Data View</title>
</head>

<body>

<h1 align="center">List of Question</h1>
<body>

<!--main container star -->
<!-- navagation bar starts -->
<div class="post_area">
  
<div id="wrapper">

<div id="tblView">
<table width='850' align='center' border='1'>
    
     <tr bgcolor='white'>
     
        <th bgcolor="white">que_id</th>
        <th>test_id</th>
		<th>que_desc</th>
		<th>ans1</th>
		<th>ans2</th>
		<th>ans3</th>
		<th>ans4</th>
		<th>true_ans</th>
        <th>Update</th>
        <th> Delete </th>
       </tr>
       
     <tr align='center'>
        
   <?php
        
 mysql_connect("localhost","root","");
 mysql_select_db("quiz_new");

   $query = "select  * from mst_question" ;
   
   $run = mysql_query($query);
   
   while ($row = mysql_fetch_array($run)){
   
    $que_id = $row[0];
	$test_id = $row[1];
	$que_desc = $row[2];
	$ans1 = $row[3];
	$ans2 = $row[4];
	$ans3 = $row[5];
	$ans4 = $row[6];
	$true_ans = $row[7];
	
   ?>        
    <tr align='center'>
    <td><?php echo $que_id;?></td>
	<td><?php echo $test_id;?></td>
	<td><?php echo $que_desc;?></td>
	<td><?php echo $ans1;?></td>
	<td><?php echo $ans2;?></td>
	<td><?php echo $ans3;?></td>
	<td><?php echo $ans4;?></td>
	<td><?php echo $true_ans;?></td>
  
  <td><a href='queupdate.php?upd=<?php echo $que_desc;?>'>Update</a></td>
  <td><a href='delque.php?del=<?php echo $que_id;?>'>Delete</a></td>
  
     </tr>
     
    <?php  } ?>
    </tr>
    </table>
    </div>
</div>
<!-- main container end -->
</body>
</html>