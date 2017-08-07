
<?php
session_start();
if(!isset($_SESSION['myusername']))
{
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>R3-Review,Rating&amp;Ranking</title>
<link rel="stylesheet" type="text/css" href="style21.css">
</head>
<body  background="bg/feedback4.jpeg" align="centre" text="black">
    <table cellspacing="15px" border="0px" align="center">
    
    <br/>
<div style="    letter-spacing: 4px;
   text-transform : uppercase;
   text-align : center;
    margin-left:80px;
   font-size : 30px;">
<tr><td><h2>Login Successful!</h2></td></tr>
</div>
<div style="margin-left:440px;">
    <div id ="nav">
              <ul>
               <tr><td> <li><button onclick="window.location.href='start_feedback1.html'"><span id="li4" >Goto Feedback Page</span></button></li></td></tr>
    </ul>
        <div id ="nav">
              <ul>
               <tr><td><li style="float:right;"><button  onclick="window.location.href='teacher.php'" onfocus=""><span id="li3">Logout</span></button></li></td></tr> 
    </ul>
    </div>
    </div>
</div>
    </table>
</body>
</html>