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
       
        <li class="nav-item" style="margin-right:300px;">
          <a class="btn" href="contact.php">Contact</a>
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
      
      
    <div class='container'>
        <?php
error_reporting(1);
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['t1'];
$email=$_POST['t2'];
$password=$_POST['t3'];
$phone=$_POST['t4'];
$city=$_POST['t5'];
$town=$_POST['t6'];
if(mysql_query("insert into register(name,email,password,phone,township,city) values('$name','$email','$password','$phone','$town','$city')"))
{

header("location:reg_success.php?name=$name & email=$email");}
else {$error= "user already exists";}}

?>
<h3 align='center'> Sign Up Here</h3>

            <form method="post" class="row g-3">
  <div class="col-md-6">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" name='t1' id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name='t2' >
  </div>
  <div class="col-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name='t3'>
  </div>
  <div class="col-12">
    <label for="input" class="form-label">Phone</label>
    <input type="text" class="form-control" name='t4' >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control"  name='t5'>
  </div>
  <div class="col-md-4">
  <label for="inputCity" class="form-label">Township</label>
    <input type="text" class="form-control"  name='t6'>
  </div>
  
  </div><br><br>
  <div class="col-12" align='center'>
  <input type="submit" name="sub" id="sub" value="Register" class="btn btn-dark" />
				 <input type="reset" name="Cancel" value="Cancel" class="btn btn-danger" />
         <label><?php echo "<font color='red'>$error</font>";?></label>
  </div>
</form>
</div>
   
     
     
      
      <div style=" height: 40px;; background-color: rgb(120, 95, 95);">
      
        <p style="color:white;
                  
                  text-align: center;" >Copyright &copy;  <strong>StarFashionCompany</strong>. All Rights Reserved. <span>Design By Myan</span></p>
                  
      </div>
</body>

</html> 