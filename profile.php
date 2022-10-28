<?php

include('header.php');
// echo "<pre>";
// print_r($_SESSION['uid']);

 $year = $_SESSION['uid']['dob'];
  $year_format = date('d-m-Y',strtotime($year));
  $pos = "Software Developer";
  

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
	   <div class="container  bg-success mt-3 alert alert-success text-white" role="alert" style="width:600px"> <?php
		   echo '<strong>'.$_SESSION['msg'].'<strong>';
	      }
	       unset($_SESSION['msg']);
	    ?>
        </div>

	<div class="container-fluid mt-3" style="width:600px; height: 400px;">
		<div class="row">
			<div class="col-lg-12 bg-white mt-5 pt-4" style="border-radius:25px;">
				<div class="table">
					<table class="table" style=" border-color: #ffff;">
						<tbody>
							<tr>
								<td rowspan="5" width="200px"> <img width="200px" height="200px" class="mt-5" src="./images/<?php echo $_SESSION['uid']['image']; ?>"> <p class="text-center m-2"><?php echo $pos; ?></p> </td>
							</tr>
							<tr><td height="90px"><h3 class="ms-4 mt-3"> Name : <?php echo $_SESSION['uid']['name'] ; ?></h3></td></tr>
							<tr><td height="90px"> <p class="ms-4 mt-3" style="font-size:20px;"> Email : <?php echo $_SESSION['uid']['email'];  ?></p> </td></tr>
							<tr><td height="90px"> <p class="ms-4 mt-3" style="font-size:20px;"> Address : <?php echo $_SESSION['uid']['address'];  ?></p> </td></tr>	
							<tr><td height="90px"> <p class="ms-4 mt-3" style="font-size:20px;"> D.O.B : <?php echo $year_format; ?></p></td></tr>
														
						</tbody>
					</table>
				</div>
			</div>			
		</div>		
	</div>
</body>
</html>