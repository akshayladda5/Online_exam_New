<!doctype html>
<html>
<head>
   <title> </title>
</head>


<body>
  
<div id="wrapper">

<div id="tblView">

<?php
	$upd = $_GET['upd'];
	mysql_connect('localhost','root','');
	mysql_select_db("quiz_new");
	$slc = "SELECT * from mst_subject WHERE sub_name = '$upd'";
	$run = mysql_query($slc);
	while($row=mysql_fetch_array($run)){
		$sub_id = $row['sub_id'];
		$sub_name = $row['sub_name'];
	}
	?>


<div id="formDiv">
<center>
<p><h1>Subject</h1></p>
<form method="post" action="updatesub.php?upd=<?php echo $sub_name;?> "/>

<label>Subject Name:</label>
<input name="sub_name" type="text" value="<?php echo $sub_name;?> "/><br><br>

<input type="submit" name="update" value="Update"/>

</form>
</center>

	<?php
	if(isset($_POST['update'])){
		$nid = $_GET['upd'];
		$sub_name = $_POST['sub_name'];
		
		
		$update = "UPDATE mst_subject SET sub_name='$sub_name' WHERE sub_name='$nid'";
		$run = mysql_query($update);
		echo "<script>alert('Update SuccessFull!');location.href='SubView.php?upd=$sub_name'</script>";
	
    }
?>


</div>
</div>
</div>
</body>


</html>
