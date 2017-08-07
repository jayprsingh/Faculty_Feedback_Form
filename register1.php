<!DOCTYPE HTML>  
<html>
<head>
</head>
<body background="bg/feedback4.jpeg" align="centre" text="black">
    <table cellspacing="2px" border="0px" align="center">
    </table>
    </body>
</html>
<?php

//connect to the server

$con = mysqli_connect("localhost",'root','');

//check if it is connected
if(!$con)
{
    
    echo "Error Connecting to the server";
}

if(!mysqli_select_db($con,'faculty'))
{
    echo "Database not selected";
}

//now sql commands


$name= $_POST['name'];
$feedback= $_POST['feedback'];
$rating= $_POST['rating'];


$sql = "INSERT INTO feedback (Name,Feedback,Rating) VALUES ('$name','$feedback','$rating')";

if(!mysqli_query($con,$sql))
{
    print"<p align =\"Centre\"><h1>Data Not Entered</h1></p>";
    header("refresh:3,url=start_feedback1.html");
}

else
{
    print"<p align =\"Centre\"><h1>Feedback Sucessfully Entered</h1></p>";
    header("refresh:3,url=start_feedback1.html");
}


?>
