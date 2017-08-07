<!DOCTYPE HTML>  
<html>
<head>
</head>
<body background="bg/feedback6.jpg" align="centre" text="black">
    <table cellspacing="2px" border="0px" align="center">
    <tr><td><h1>Feedback Page!</h1></td></tr>
        </table>
    </body>
</html>

<?php
	 $host="localhost";
	 $dbuser="root";
	 $pass="";
	 $dbname="faculty";
	 $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		// echo "$conn";
		 if(mysqli_connect_errno())
		 {die("connection Failed!".mysqli_connect_error());
		 }


?>
<html>
	<head>
		<title>Listing</title>
	</head>
   <body background="bg/feedback5.png" align="centre" text="black">
    <table cellspacing="2px" border="0px" align="center">
           			
				<?php
					$sql="SELECT name,feedback,rating FROM feedback ;"; 
					$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						die("query failed".mysqli_error($conn));
					}
					else{
						while($row=mysqli_fetch_array($res))
						{
							echo"<br><b>Name:</b>{$row['name']}<br>".
							"<b>Feedback:</b>{$row['feedback']}<br>".
							"<b>Rating:</b>{$row['rating']}<br>".
							
							"-----------------------------------------------------------------------------------------------------------------------------";
						}
						//echo "Table Created Sucessfully";
					}
					
					 
				     
				?>	 
       <tr><td><label><h2>Press here for Main page</h2></label></td></tr> 
        <form action="teacher.php" method="POST">
     <tr><td> <button type="submit">Back</button></td></tr>
     </form>
       </table>
			</body>	
</html>	

<?php
mysqli_close($conn);
//header("Location: Teacher_menu.php");
							//exit;
?>			