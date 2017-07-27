<!doctype html>
<html>
<head>
   <title></title>
</head>


<body>
  
<div id="wrapper">

<div id="tblView">

<?php
	$upd = $_GET['upd'];
	mysql_connect('localhost','root','');
	mysql_select_db("quiz_new");
	$slc = "SELECT * from mst_test WHERE test_name='$upd'";
	$run = mysql_query($slc);
	while($row=mysql_fetch_array($run)){
	
	$test_name = $row['test_name'];
	$total_que = $row['total_que'];
		
	}
	?>


<div id="formDiv">
<center>
<p><h1>Test</h1></p>
<form method="post" action="testupdate.php?upd=<?php echo $test_name;?> "/>

<label>Test Name:</label>
<input type="text"name="test_name" value="<?php echo $test_name;?>" /><br><br>

<label>Total Question:</label>
<input type="text"name="total_que" value="<?php echo $total_que;?>" /><br><br>

<input type="submit" name="update" value="Update" />

</form>
</center>

	<?php
	if(isset($_POST['update'])){
		$nid = $_GET['upd'];
		$test_name = $_POST['test_name'];
		$total_que = $_POST['total_que'];
		
		$update = "UPDATE mst_test SET test_name='$test_name',total_que='$total_que' WHERE test_name='$nid'";
		$run = mysql_query($update);
		echo "<script>alert('Update SuccessFull!');location.href='TestView.php?upd=$test_name'</script>";
	
    }
?>


</div>
</div>
</div>
</body>


</html>
