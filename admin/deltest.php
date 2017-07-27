<?php

 mysql_connect("localhost","root","");
    mysql_select_db("quiz_new");

$delete_id = $_GET['del'];

$query1 = "delete from mst_test where test_id='$delete_id'";

if(mysql_query($query1)){
    
    echo "<script>alert('delete SuccessFull!');location.href='TestView.php?deleted'</script>";
	
}





?>