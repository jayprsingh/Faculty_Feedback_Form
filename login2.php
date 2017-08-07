<!DOCTYPE html>
<html>
<head>
</head>
<body background="bg/feedback4.jpeg" text="black">
<table cellspacing="15px" border="0px" align="center">
		 
                            <form  action="checkloginran.php" autocomplete="on" method="POST"> 
                              <tr><td><h1>Log in</h1></td></tr> 
                                <p> 
                                   <tr><td><label for="USN" class="usn"  > Your unique id or usn </label></td></tr> 
                                    <tr><td> <input id="myusername" name="myusername" required="required" type="text" placeholder="myusername"/></td></tr>
                                </p>
                                <p> 
                                    <tr><td><label for="password" class="youpasswd"> Your password </label></td></tr>
                     <tr><td><input id="mypassword" name="mypassword" required="required" type="password" placeholder="eg. X8df!90EO" /></td></tr> 
                                </p>
                                <p class="keeplogin"> 
								<tr><td>	<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> </td></tr>
									<tr><td><label for="loginkeeping">Keep me logged in</label></td></tr>
						</p>
                              <p class="login button"> 
                                    <tr><td><input type="submit" value="submit" name="submit" /></td></tr> 
								</p>
                     
                            </form>
    </table>
                        
</body>
</html>