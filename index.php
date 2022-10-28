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
	   <div class="container  bg-success mt-3 alert alert-success text-white" role="alert" style="width:400px"> <?php
		   echo '<strong>'.$_SESSION['msg'].'<strong>';
	      }
	       unset($_SESSION['msg']);
	    ?>
        </div>
<strong>
	<div class="container-fluid mt-3" style="width:400px;">
		<div class="row">
			<h3 class="text-center my-4">Please Signup</h3>
			<div class="col-lg-12 bg-white pt-4" style="border-radius:25px;">
				<form method="post" action="reg.php" enctype='multipart/form-data'>
					<div class="form-group mx-4">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" required>
					</div>

					<div class="form-group mx-4">
						<label for="name">Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>

					<div class="form-group mx-4">
						<label for="name">D.O.B</label>
						<input type="date" name="dob" class="form-control" required>
					</div>

					<div class="form-group mx-4">
						<label for="name">Address</label>
						<input type="text" name="address" class="form-control" required>
					</div>	

					<div class="form-group mx-4">
						<label for="name">Image</label>
						<input type="file" name="image" class="form-control" required>
					</div>	
					<div class="form-group mx-4">
						
						<input type="submit" name='submit' class="btn btn-success m-4 text-center" required>
					</div>	
					
				</form>
				
			</div>
			
		</div>

		
	</div>
     </strong>
       <a href="login.php" class="btn btn-link mt-4 text-primary" style="margin-left: 400px; text-decoration:none ; font-weight: bold;">Already signup? Login</a>
	

</body>
</html>