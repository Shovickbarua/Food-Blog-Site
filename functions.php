<?php

require_once('db/connection.php');

/* Subscribe */

if(isset($_POST['subs'])){

	$email =$_POST['email'];
	
	$sql ="insert into subscribe (email) values('$email')"; 
	
	if($con->query($sql)== TRUE){
		HEADER("LOCATION:index.php");
	}
		else{
		HEADER("LOCATION:index.php");
			die ();
		}
	
}

/* Add Recipe */

if(isset($_POST['submit'])){
	$name =$_POST['name'];
	$email =$_POST['email'];
	$recName =$_POST['recName'];
	$des =$_POST['des'];
	
	$sql ="insert into add_recipe (name,email,recName,des) values('$name','$email','$recName','$des')"; 
	
	if($con->query($sql)== TRUE){
		HEADER("LOCATION:recipe.php");
	}
		else{
		HEADER("LOCATION:recipe.php");
			die ();
		}
	
}

/* Request recipe */
if(isset($_POST['btn'])){
    $name =$_POST['name'];
	$email =$_POST['email'];
	$recName =$_POST['recName'];

        $sql ="insert into add_request (name,email,recName) values('$name','$email','$recName')"; 
        
        if($con->query($sql)== TRUE){
			HEADER("LOCATION:recipe.php");
        }
            else{

			HEADER("LOCATION:recipe.php");
            die ();
            }  
	
}

/* Contact */
if(isset($_POST['contact'])){
	
	$name =$_POST['name'];
	$email =$_POST['email'];
	$mobile =$_POST['mobile'];
	$com =$_POST['com'];

	$sql ="insert into contact (name,email,mobile,com) values('$name','$email','$mobile','$com')"; 
	
	if($con->query($sql)== TRUE){
		HEADER("LOCATION:contacts.php");
	}
		else{
		HEADER("LOCATION:contacts.php");
		die ();
		}
	
}

/* Sign Up */

if(isset($_POST['signup'])){

	
	$fName =$_POST['fName'];
	$lName =$_POST['lName'];
	$email =$_POST['email'];
    $mobile =$_POST['mobile'];
    $pass= md5($_POST['pass']);
    $cpass= md5($_POST['cpass']);
	$address =$_POST['address'];
	$gender =$_POST['gender'];
    $dob	=date('Y-m-d',strtotime($_POST['dob']));
	
    $imageName = $_FILES['image']['name'];
	$imageTmp = $_FILES['image']['tmp_name'];
	$directory = "images/";
	$imgUrl = $directory.$imageName;
	move_uploaded_file($imageTmp,$imgUrl);

	if($pass != $cpass){
		HEADER("LOCATION:pass_er.php");
	}
	else{
		$sql = "insert into user (fName,lName,email,mobile,pass,cpass,address,gender,dob,imgUrl) values ('$fName','$lName','$email','$mobile','$pass','$cpass','$address','$gender','$dob','$imgUrl')";
	
	if($con->query($sql)== TRUE){

		HEADER("LOCATION:signup.php");
	}
		else{
			HEADER("LOCATION:signup.php");
			die ();
		}	
		
	}
	
}

/* Buy Page Rating */

if(isset($_POST['buy'])){
	$com =$_POST['com'];
	$name =$_POST['name'];
	$email =$_POST['email'];
	$rate =$_POST['rate'];
	

	$sql ="insert into buy_rate (com,name,email,rate) values('$com','$name','$email','$rate')"; 
	
	if($con->query($sql)== TRUE){
		HEADER("LOCATION:buy2.php");
	}
		else{
		HEADER("LOCATION:buy2.php");
		die ();
		}
	
}

/* Recipe Rating */

if(isset($_POST['recipe'])){
	$com =$_POST['com'];
	$name =$_POST['name'];
	$email =$_POST['email'];
	$rate =$_POST['rate'];
	

	$sql ="insert into recipe_rate (com,name,email,rate) values('$com','$name','$email',$rate)"; 
	
	if($con->query($sql)== TRUE){
		HEADER("LOCATION:recipe2.php");
	}
		else{
		HEADER("LOCATION:recipe2.php");
			die ();
		}
	
}



?>