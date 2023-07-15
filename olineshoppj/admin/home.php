<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
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
          <a class=" btn" href="#">Home</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="addproduct.php">AddProduct</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="view_order.php">OrderList</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="feedback.php">Feedback</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="view_product.php">Cargo</a>
        </li>
        <li class="nav-item" style="margin-right:10px">
          <a class="btn" href="logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </nav>
  
      <div class="alert alert-success" role="alert">
       <marquee direction="right">Welcome Admin</marquee>
      </div>
      <br><br>
     
      
       
      <div  id="ff">
      <div class="foot ">
        <p style="text-align: center;">Copyright &copy;  <strong>StarFashionCompany</strong>. All Rights Reserved. <span>Design By Myan</span></p>
        </div>            
      </div>
   
      <?php } ?>
</body>

</html> 