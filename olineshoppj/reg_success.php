<?php
	error_reporting(1);
	
	include("connection.php");
	
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>  
    <script src="css/jquery.min.js"></script>
    <script src="css/popper.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    
    <title>Home Page</title>
</head>
<body class="bg">

  <nav class="navbar navbar-expand-md navbar-dark ">
    <a class="navbar-brand" href="#"><img src="images/shopping-cart.png" width="30px" height="30px">
    StarOnlineFashionStore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item " style="margin-right:10px;">
          <a class=" btn" href="index.php">Home</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="product.php">Product</a>
        </li>
       
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="contact.php">Contact</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="#">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  
      <div class="alert alert-success" role="alert">
       <marquee direction="right">THANK YOU FOR YOUR REGISTER</marquee>
      </div>
      
      
  
    
</div><br>
<div class="container" align="center  ">
  
<h2>Welcome!! <?php echo "<font color=blue>".$_REQUEST['name']."</font>"; ?> </h2>
	 
     <br>
     <p color="white">You have created your account successfully!!!</p>
     
     <p color="white">Thank you for registration.</p>
     <p color="white"><a href="?log=out">Go back</a></p>
     
    
</div>
     
      
      <div style=" height: 40px;; background-color: rgb(120, 95, 95);">
      
        <p style="color:white;
                  
                  text-align: center;" >Copyright &copy;  <strong>StarFashionCompany</strong>. All Rights Reserved. <span>Design By Myan</span></p>
                  
      </div>
</body>

</html> 