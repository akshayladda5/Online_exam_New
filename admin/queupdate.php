<!doctype html>
<html>
<head>
   <title>registration page </title>
</head>


<body>
  
<div id="wrapper">

<div id="tblView">

<?php
	$upd = $_GET['upd'];
	mysql_connect('localhost','root','');
	mysql_select_db("quiz_new");
	$slc = "SELECT * from mst_question WHERE que_desc = '$upd'";
	$run = mysql_query($slc);
	while($row=mysql_fetch_array($run)){
		$que_desc = $row['que_desc'];
		$ans1 = $row['ans1'];
		$ans2 = $row['ans2'];
		$ans3 = $row['ans3'];
		$ans4 = $row['ans4'];
		$true_ans = $row['true_ans'];	
	}
	?>


<div id="formDiv">
<center>
<p><h1>Online Test Questions</h1></p>
<form method="post" action="queupdate.php?upd=<?php echo $que_desc;?> "/>

<label>Question:</label>
<input type="text" name="que_desc"  value="<?php echo $que_desc;?>"/><br><br>

<label>a)</label>
<input type="text"name="ans1" value="<?php echo $ans1;?>" /><br><br>

<label>b)</label>
<input type="text"name="ans2" value="<?php echo $ans2;?>" /><br><br>

<label>c)</label>
<input type="text"name="ans3" value="<?php echo $ans3;?>" /><br><br>

<label>d)</label>
<input type="text"name="ans4" value="<?php echo $ans4;?>"/><br><br>

<label>Answer:</label>
<input type="text"name="true_ans" value="<?php echo $true_ans;?>" /></br></br>
<input type="submit" name="update" value="Update" />

</form>
</center>

	<?php
	if(isset($_POST['update'])){
		$nid = $_GET['upd'];
		$que_desc = $_POST['que_desc'];
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];
		$ans3 = $_POST['ans3'];
		$ans4 = $_POST['ans4'];
		$true_ans = $_POST['true_ans'];
		
		$update = "UPDATE mst_question SET que_desc='$que_desc',ans1='$ans1',ans2='$ans2',ans3='$ans3',ans4='$ans4',true_ans='$true_ans' WHERE que_desc='$nid'";
		$run = mysql_query($update);
		echo"<script>alert('Update SuccessFull!');location.href='QuestionView.php?upd=$que_desc'</script>";
	
    }
?>


</div>
</div>
</div>
</body>


</html>
