<!DOCTYPE html>
<html>
<head></head>
<body background="bg/feedback4.jpeg" align="centre" text="black">
    <table cellspacing="15px" border="0px" align="center">
          </table>
    </body>
</html>
<?php

//connect to the server

$con = mysqli_connect("localhost",'root','');//username-root,pass-nothing

//check if it is connected
if(!$con)
{
    
    echo "Error Connecting to the server";
}

if(!mysqli_select_db($con,'faculty'))   // databse is faculty
{
    echo "Database not selected";
}

//now sql commands

$usn= $_POST['usnsignup'];
$name= $_POST['usernamesignup'];
$email= $_POST['emailsignup'];
$sex= $_POST['sexsignup'];
$password= $_POST['passwordsignup'];

$sql = "INSERT INTO sign_up (USN,USERNAME,EMAIL,GENDER,PASSWORD) VALUES ('$usn','$name','$email','$sex','$password')";

if(!mysqli_query($con,$sql))
{
    print"<p align =\"Centre\"><h1>Not registered</h1></p>";
    header("refresh:3,url=login1.php");//automatically redirecting after sometime
}

else
{
   print"<p align =\"Center\"><h1>Sucessfully Registered to Database!</h1></p>";
    header("refresh:3,url=login1.php");
}



?>
