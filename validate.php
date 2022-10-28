<?php

include('dbcon.php');
session_start();

if (isset($_POST['submit'])) {
    extract($_POST);
    $q = "select * from user where email = '$email' and password= '$password'";
    $run = mysqli_query($con,$q);
    $row = mysqli_num_rows($run);
    if ($row < 1 ) {
        
        $_SESSION['msg'] = "Incorrect Email or password";
        header('location:login.php');
    }
    else{
    	 $data = mysqli_fetch_assoc($run);
    	 // $user['id'] = $data['id'];
      //    $user['name'] = $data['name'];
      //    $user['email'] = $data['email'];
      //    $user['address'] = $data['address'];
      //    $user['image'] = $data['image'];
    	 $_SESSION['uid'] = $data;
    	 {
    	 	header('location:home.php');
    	 }
    }
}
else{
	echo "failed to login";
}

?>