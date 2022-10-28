<?php

/*==MYSQLI Object Oriented==*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
	die("Connection_failed: ".$con->connect_error);
}
?>