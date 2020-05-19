
<!-- 
	- This is the back end of the login user interface
	- This is wht we call post the data into our database table
 -->


<!-- 
	- This is the back end of the login user interface for you to get the data and do validation
	- Before allowing the user to allow to access your system
-->


<?php

/* 
	- this include file is a file of  back end of  your system to connect to database. 
	- because, the rule is, to get or post data in database, the back end file of one user interface need to have connection to database
	- it is to allowed the system to automatically get / post data from our database.
 	- hence the include syntax is for you to not writing the database connection several times everytime you need to do the back-end data.
	- just simply call the file that contain the connection code and the system would automatically access your database in order to get or post data in database.
 */
include 'db_connect.php'; 

session_start(); 							//session_start(); 							

$user = $_POST['user']; 					// assign textbox to variable
$pass = $_POST['pass'];

//Remember Me Function 
if(isset($_POST["remember"])) {
	setcookie ("user",$_POST["user"],time()+ 3600);
	setcookie ("pass",$_POST["pass"],time()+ 3600);
	
} else {
	setcookie("user","");
	setcookie("pass","");
}


$query = "SELECT * FROM tblpelanggan where username='$user' AND password='$pass'"; 
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
 if(mysqli_num_rows($result) <= 0)   			// check either result found or not
	   {
	   header("location:login.php");			// redirect to another page (data not found!)
	   }
	   else
	   {
		$info = mysqli_fetch_array($result); 	// returns a row from a recordset
	    $_SESSION['name']=$info['name'];
	    $_SESSION['user']=$info['username'];
	    $_SESSION['id']=$info['id'];
	    $_SESSION['pass']=$info['password'];	// assign field in username to session [user]	   
		header("location:menu.php");
	   }
mysqli_close($link);
?>
