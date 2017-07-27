<?php

 mysql_connect("localhost","root","");
    mysql_select_db("quiz_new");

$delete_id = $_GET['del'];

$query1 = "delete from mst_subject where sub_id = '$delete_id'";

if(mysql_query($query1)){
    
    echo "<script>alert('delete SuccessFull!');location.href='SubView.php?deleted'</script>";
	
}





?>