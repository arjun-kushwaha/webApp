<?php
include('dbcon.php');
include('password.php');
include('email.php');
session_start();

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$password = passGenerator();
	//$image = $_POST['image'];
	$filename = $_FILES["image"]["name"];
	$temp =  $_FILES["image"]["tmp_name"];
	$folder = "images/".$filename;
	move_uploaded_file($temp, __DIR__ ."/images/".$filename);
	print_r($folder);

	
	$exist = "select * from user where email = '$email' ";
	$exe = mysqli_query($con,$exist);
	$row = mysqli_num_rows($exe);
	if ($row>0) {

		 $_SESSION['msg'] = "You are already registered ! please Login ";

	 	  header('location:index.php'); die;
	} 

	$q = "insert into user(name,email,address,image,password,dob ) values ('$name','$email','$address','$filename','$password','$dob')";
	$run = mysqli_query($con,$q);
	 mailto($name,$email,$password);

	 if($run) {
	 	
	 	   $_SESSION['msg'] = "Thank You !! Your password has been sent to your Email ID";

	 	   header('location:index.php');
	 }
	 else{
	 	echo "failed to insert";
	 }

	
}
else{
	echo "failed to connect";
}



?>