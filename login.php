<?php

session_start();
require_once('db/connection.php');

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $sql = "select email,pass from user where email = '$email' and pass = '$pass'";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
        $_SESSION['email'] = $data['email'];
        HEADER('LOCATION:index.php');
    }else{
		HEADER('LOCATION:login_er.php');
		
	}   
}

?>