<?php
session_start();
?>
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<style>
*
{
	margin:0px auto;
	padding:0px auto;
}

.main
{
	width:100%;
	height:100px;
	border:1px solid #000;
	background-color:#654;
}

.header
{
	padding-top:5px;
	width:100%;
	height:30px;
	border:1px solid #fff;
	background-color:#000;
}

.section
{
	width:100%;
	height:250px;
	border:1px solid #000;
}

.footer
{
	width:100%;
	height:50px;
	border:1px solid #000;
}

.menu {
    height: 50px;
    width: 100%;
    background-color: aqua;
}


</style>
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Welcome to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz</a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result</a></td>
  </tr>
</table>';
   
		exit;
}
?>


	<div class="main">
		<div class="header">
		</div>	
			
			
		<div class="menu">
		</div>
		
		<div class="section">
		</div>
		
		<div class="footer">
		</div>
		
	</div>


	<form name="form1" method="post" action="">
		  <table width="200" border="0">

		  <tr>
			  <td><span class="style2">Login ID </span></td>
			  <td><input name="loginid" type="text" id="loginid2"></td>
			</tr>

			<tr>
			  <td><span class="style2">Password</span></td>
			  <td><input name="pass" type="password" id="pass2"></td>
			</tr>
			<tr>
			  <td colspan="2"><span class="errors">
				<?php
			  if(isset($found))
			  {
				echo "Invalid Username or Password";
			  }
			  ?>
			  </span></td>
			  </tr>
			<tr>
			  <td colspan=2 align=center class="errors">
			  <input name="submit" type="submit" id="submit" value="Login"></td>
			</tr>
			<tr>
			  <td colspan="6"><div id="center">
			  <span class="style4"><center>New User? <a href="signup.php">Signup Free</center></a></span></div></td>
			  </tr>
		  </table>


</body>
</html>
