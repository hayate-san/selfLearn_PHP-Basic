
<!-- 
	This is the front end of the login user interface stye 2
	If you want to see login user interface form style 1 just simply call the file login.php
	
	both are the same actually, if you intend to used this file as the index, make sure to change route path to the other path as well
	since for this system, i intergrate all my file routes to login.php
-->

<html>
	<head>
		<title>LOGIN</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	
	<script>
	// later if you want to intergrate with bootstrap template to make the user interface more beutiful
	// insert the css library link here
	</script>

	<body>
		<br><br><br><br>

		<!-- form style 2 : basic php style with table insert for more undrstnding without bootstrap template -->
		<!-- try to play around by changing the route in the other file to see the difference -->
			
		<form id="form1" method="post" action="login_check.php">
			<table width="253" align="center">
			
				<tr>
					<th>SIGN IN</th>
				</tr>
			

				<tr>
					<td align="center">to an existing account </td>
				</tr>
				
				<tr><td><hr></td></tr> <!-- line insertion  -->
				<tr><td>&nbsp;</td></tr>  <!-- break line insertion  -->
				
				<tr>
					<td align="center">Username</td>
				</tr>
				
				<tr> 
					<td align="center" width="247">
						<input name="user" type="text" id="user" value="<?php if(isset($_COOKIE["user"])) ?>">
					</td>	
				</tr>
				
				<tr>
					<td align="center">Password</td>
				</tr>
			
				<tr>
					<td align="center" width="247">
						<input name="pass" type="Password" id="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>">
					</td>
				</tr>
			
				tr><td>&nbsp;</td></tr>
			
				<tr>
					<td align="center">
						<input type="submit" name="Submit" value="Login">
					</td>
				</tr>
				
				<tr><td>&nbsp;</td></tr>
				
				<tr>
					<td align="center">
						<input type="checkbox" name="remember" id="user"> Remember Password ?
					</td>
				</tr>
				
				<tr>
					<td align="center">Click <a href="http://localhost/phpmyadmin/index.php">here</a> to cancel</p>
				</tr>
				
		    </table> 
		</form>
	</body>
</html>
	
