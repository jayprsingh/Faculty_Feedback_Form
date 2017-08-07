<?php
session_start();
include("includes/config1_db.php");
 // Define $myusername and $mypassword
$myusername=$_POST['tname'];
//$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT name,feedback,AVG(rating) FROM feedback WHERE name='$myusername' group by name;
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
						{
							echo" <b>Name:</b>{$row['name']} ".
							"<b>FEEDBACK:</b>{$row['feedback']}<br>".
							"<b>RATING:</b>{$row['AVG(rating)']}<br>".
							
							
							
							"-----------------------------------------------------------------------------------------------------------------------------";
						}

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername'] = $myusername;
//$_SESSION['mypassword'] = $mypassword;
//session_register("myusername");
//session_register("mypassword");
//header("location:login_success.php");
}
else {
?>
<table align="center" width="100%" border="0" cellpadding="0" cellspacing="1">
<tr><td align="center"><br/><br/>
<?
echo "Wrong Username or Password";
echo "<br/><input type=\"button\" name=\"Back\" value=\"Back\"  onclick=\"javascript: history.go(-1)\" />";
?>
</td></tr></table>
<?
}

ob_end_flush();
?>