<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>MyWebApp</title>
</head>
<body> 

 <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img width="60px" height="60px" src="./images/<?php echo $_SESSION['uid']['image'] ?>" ></a>
    <h4 class="text-white">Welcome <?php echo $_SESSION['uid']['name'] ?></h4>
   
      <ul class="navbar-nav  mx-5 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="profile.php">View Profile</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="download.php">PDF Generator</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>

</nav>

</body>
</html>