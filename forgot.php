<?php session_start();
include('dbcon.php');
include('email.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>MyWebApp</title>
	<style>
		body {
  background-color: lightblue;
        }
</style>
</head>
<body>
			 
	<?php if (isset($_SESSION['msg'])) {
	      ?> 
	   <div class="container  bg-success mt-3 alert alert-success text-white" role="alert" style="width:400px"> <?php
		   echo '<strong>'.$_SESSION['msg'].'</strong>';
	      }
	       unset($_SESSION['msg']);
	    ?>
        </div>
<strong>
	<div class="container-fluid mt-3" style="width:400px;">
		<div class="row">
			<h3 class="text-center my-4">Forgot Password</h3>
			<div class="col-lg-12 bg-white pt-4" style="border-radius:25px;">
				<form method="post" action="#" enctype='multipart/form-data'>
					
					<div class="form-group m-4">
						<label for="name">Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>

					<div class="form-group">				
						<input type="submit" name='submit' value="Get Password" class="btn btn-success m-4 text-center" required>
					</div>	
					
				</form>
				
			</div>

			
		</div>

		
	</div>
     
       <a href="index.php" class="btn btn-link mt-4" style="margin-left: 400px; text-decoration:none;font-weight: bold;">Not Registered ? signup</a>
      </strong>	

<?php 

if(isset($_POST['submit'])) {
	extract($_POST);

	$q = "select * from user where email = '$email' ";
	$run = mysqli_query($con,$q);
	$row = mysqli_num_rows($run);
	if ($row>0) {
		$res = mysqli_fetch_assoc($run);
		// echo "<pre>"; print_r($res);
		$name = $res['name'];
		$email = $res['email'];
		$password = $res['password'];
		//echo $name,$email,$password;
		mailto($name,$email,$password);
		$_SESSION['msg'] = "Your password has been sent to your Email id ";
        header('location:forgot.php');

			}
	else {

		$_SESSION['msg'] = "Email id not Exist please signup";
        header('location:forgot.php');
	}	
}
?>
</body>
</html>