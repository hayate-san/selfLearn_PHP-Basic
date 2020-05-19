
<!-- 
	This is the front end of the login user interface style 1
	If you want to see login user interface form style 2 just simply call the file login2.php
	
	but for this system, i intergrate all my file routes to login.php
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
		<br><br>
		
		<!-- login form style 1 : basic php style for more undrstnding without bootstrap template -->
		<form name="form1" method="post" action="login_check.php">
		
			<label>Username </label>
			<input name="user" type="text" id="user" value="<?php if(isset($_COOKIE["user"])) ?>"><br>
			
			<!-- this line below
				value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>" 
				is meant to show the cookie of username store data in database column when we put cursor in the text field
				in simple word : it is the get and post method
			-->
			
			<label>Password </label>
			<input name="pass" type="Password" id="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>"><br> 
			  
			<!-- whn click submit it would redirect to login_check -->
			<input type="submit" name="Submit" value="Submit"><br> 
			
			 
			<!-- cookie to allowed remember passwrd to be display in text field whn we put cursor in it -->
			<input type="checkbox" name="remember" id="user"> Remember Password?
			
		</form>
			
	</body>
</html>
	
<!--	yg nak baiki nanti
	
	login.html
Action is for redirect from this page to other page

Post method is to store the value as $_POST['']

<form action="register.php" method="post">
  <input type="text" name="username" placeholder="Username"/>
  <input type="password" name="password" placeholder="Password"/>
  <button type="submit" name="login"></button>
</form>

Input type is for specify the content. There can be [type="text"], [type="password"], [type="email"], [type="numbers"].

Input name is variable for method $_POST[''], for example. If name="username", the variable should be $_POST['username']

Input placeholder is for displaying string when there is no input, which is not the actual value.

Button type="submit" is default type for make the form react to the button.

Button name="login" is for specifiy the funtion later or i will explain in login.php
login.php
// <?php
// include "database.php";

// if(isset($_POST['login'])){
  // $username=$_POST['username'];
  // $passowrd=$_POST['password'];

// $query="SELECT * `users` WHERE `username`='$username'";
  // $result=mysqli_query($connect, $query);

  // $count=mysqli_num_rows($result);
  // if($count==0){
    // header('location: home.html?user%does%not%exist');
    // exit();
  // }

  // $row=mysqli_fetch_assoc($result);
  // if($_POST['password']!=$row['password']){
    // header('location: home.php?password%does%not%match');
    // exit();
  // }

  // session_start();
  // $_SESSION['userid']=$row['userid'];
  // header('location: home.php?login%successful');
  // exit();
// }
// <?php 
 // this is compulsory in any php files
// include "database.php" First of all, you need to connect to database. My suggestion is. to have one file 'database.php', you will have shorter link instead of connecting to database multiple time. (check the last markdown).
// if(isset($_POST['login'])){} - if the login button is pressed, it will only run the coding inside the bracket here.
// $username=$_POST['username']; $passowrd=$_POST['password']; - get the value from input
// $query="SELECT * users WHERE username='$username'"; - Make sure table users and column username is the same as in database   or you'll receive error input.
// $result=mysqli_query($connect, $query); - mysqli_query is for using $query into SQL in database
// $count=mysqli_num_rows($result); - Let's check if there's users existed by filtering user using num_rows from $results
// if($count==0){} - if user doesnt not exist
// header('location: home.html?any%any%any); - to redirect
// exit() - end the function here
// $row=mysqli_fetch_assoc($result); - to get all the value from specified rows as the input in $query
// $row['password'] is the value for password in database now
//-->