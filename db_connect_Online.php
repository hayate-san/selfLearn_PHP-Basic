 <?php 
//connection to mySQL
$host="";
$username="root";
$password="";
$link = mysql_connect($host,$username,$password)or die("Could not connect");
//connection to database
$db = mysql_select_db("dbDirektori", $link)or die("Could not select database");
 ?>


