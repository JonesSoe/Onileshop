<?php
session_start();
error_reporting(1);
include("connection.php");
if(isset($_POST['log']))
{ if($_POST['name']=="" || $_POST['pwd']=="")
{ $err="fill your id and password first"; }
else 
{$d=mysql_query("select * from admin where name='{$_POST['name']}' ");
$row=mysql_fetch_object($d);
$fid=$row->name;
$fpass=$row->pass; 
if($fid==$_POST['name'] && $fpass==$_POST['pwd'])
{$_SESSION['sid']=$_POST['name'];
header('location:home.php'); }
else { $er=" your password is not"; }}
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
    
    <title>Admin Login Page</title>
</head>
<body class="bg">

  <nav class="navbar navbar-expand-md navbar-dark ">
    <a class="navbar-brand" href="#"><img src="images/shopping-cart.png" width="30px" height="30px">
    StarOnlineFashionStore</a>
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item " style="margin-right:10px;">
          <a class=" btn" href="#">Home</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="#"> AddProduct</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="#">OrderList</a>
        </li>
        <li class="nav-item" style="margin-right:10px;">
          <a class="btn" href="#">Feedback</a>
        </li>
        <li class=""></li>
      </ul> -->
    </div>
  </nav>
  <div class="alert alert-success" role="alert">
       <marquee direction="right">Welcome Back </marquee>
      </div>
      <br><br>
  <div class="container" style="align-items:center; color:white;">
        
        <form method="post" name="contact" action="#">
            <label for="formGroupExampleInput" class="form-label">Admin Name </label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name"  placeholder="Enter admin name">
            <label for="formGroupExampleInput" class="form-label">Password</label>
            <input type="password" class="form-control" name="pwd" id="formGroupExampleInput" placeholder="Enter password">
           
            <br>
            <div>

            
                    
                    <input type="submit" name="log"  id="log" value="Log in" class="btn" />
               </form>

        </div>

  </div>

  
     <br>
     
      
      <!-- <div id="ff">
      <div class="foot">
        <p>Copyright &copy;  <strong>StarFashionCompany</strong>. All Rights Reserved. <span>Design By Myan</span></p>
        </div>           
      </div> -->
      
</body>

</html> 