<?php 
//connection to mySQL if you install mysql software
$host="localhost";
$username="root"; //username you set when installing mysql
$password="xxxx"; //password you set when installing mysql
$link = mysqli_connect($host,$username,$password)or die("Could not connect");
//connection to database
$db = mysqli_select_db( $link,"dbdirektori")or die("Could not select database");
?>
