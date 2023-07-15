<?php
session_start();
error_reporting(1);
$i=$_REQUEST['img'];
include("connection.php");
if(isset($_POST['log']))
{ if($_POST['id']=="" || $_POST['pwd']=="")
{ $err="fill your id and password first"; }
else 
{$d=mysql_query("select * from register where email='{$_POST['id']}' ");
$row=mysql_fetch_object($d);
$fid=$row->email;
$fpass=$row->password; 
if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
{$_SESSION['sid']=$_POST['id'];
//echo"<script>location:href='order.php?img=$i'</script>";
header("location:order.php?img=$i"); 
}
else {$err=" your password is not"; }}
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
    
    <title>Login Page</title>
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
        
        <li class="nav-item" style="margin-right:300px;">
          <a class="btn" href="contact.php">Contact</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn btn-dark" href="register.php">Sign up</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn btn-warning" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  
      <div class="alert alert-success" role="alert">
       <marquee direction="right">Welcome to Our OnlineFashionStore &#9742;-09453432435</marquee>
      </div>
      <div class="container">
      <h3 align="center" class='head'>User Login</h3><br><br>
      <form method='post' name='contact' action='#'>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email - </label>
          <div class="col-sm-10">
            <input type="email" name="id" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password - </label>
          <div class="col-sm-10">
            <input type="password" name='pwd' class="form-control text-center" id="inputPassword3">
          </div>
        </div>
        <button type="submit" align="center"  name='log' class="btn">Login</button>
    </form>
</div><br><br>
      <div style=" height: 40px;; background-color: rgb(120, 95, 95); position:sticky;">
      
        <p style="color:white;
                  
                  text-align: center;" >Copyright &copy;  <strong>StarFashionCompany</strong>. All Rights Reserved. <span>Design By Myan</span></p>
                  
      </div>
</body>

</html> 