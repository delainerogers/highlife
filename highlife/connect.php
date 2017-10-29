<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "cooldata";
$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection)
{
	echo "connection";
}


if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
?>