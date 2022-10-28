<?php session_start() ?>
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
	   <div class="container  bg-danger mt-3 alert alert-danger text-white" role="alert" style="width:400px"> <?php
		   echo '<strong>'.$_SESSION['msg'].'</strong>';
	      }
	       unset($_SESSION['msg']);
	    ?>
        </div>
<strong>
	<div class="container-fluid mt-3" style="width:400px;">
		<div class="row">
			<h3 class="text-center my-4">Login</h3>
			<div class="col-lg-12 bg-white pt-4" style="border-radius:25px;">
				<form method="post" action="validate.php" enctype='multipart/form-data'>
					
					<div class="form-group m-4">
						<label for="name">Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>

					<div class="form-group m-4">
						<label for="name">Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>	

					<div class="form-group">				
						<input type="submit" name='submit' value="Login" class="btn btn-success m-4 text-center" required>
					</div>	
					
				</form>
				
			</div>

			
		</div>

		
	</div>
     
       <a href="index.php" class="btn btn-link mt-4" style="margin-left: 400px; text-decoration:none;font-weight: bold;">Not Registered ? signup</a>
       <a href="forgot.php" class="btn btn-link" style="margin-left: 400px; text-decoration:none;font-weight: bold;">forgot password ?</a>
</strong>	

</body>
</html>