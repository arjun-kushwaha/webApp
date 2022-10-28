<?php 

include('header.php');

     //echo "<pre>"; print_r($_SESSION['uid']);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
		<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
		    <div class="carousel-item active" data-bs-interval="2000">
		      <img src="./images/img1.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h5 class="text-white">First slide label</h5>
		        <p class="text-white">Some representative placeholder content for the first slide.</p>
		      </div>
		    </div>
		    <div class="carousel-item" data-bs-interval="2000">
		      <img src="./images/img2.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h5 class="text-white">Second slide label</h5>
		        <p class="text-white">Some representative placeholder content for the second slide.</p>
		      </div>
		    </div>
		    <div class="carousel-item" data-bs-interval="2000">
		      <img src="./images/img3.jpg" class="d-block w-100" alt="...">
		      <div class="carousel-caption d-none d-md-block">
		        <h5 class="text-white">Third slide label</h5>
		        <p class="text-white">Some representative placeholder content for the third slide.</p>
		      </div>
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
</body>
</html>