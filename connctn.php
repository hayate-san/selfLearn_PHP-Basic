<?php

$user = 'root';
$pass = '';
$db = 'test'

$db = new mysqli('localhost', $user, $pass, $db) or die ("unable to connect");

echo "connect to localhost phpadmin admin";