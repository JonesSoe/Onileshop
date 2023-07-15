<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$prodno=$_POST['prodno'];
$price=$_POST['price'];
$name=$_POST['nam'];
$phone=$_POST['pho'];
$add=$_POST['add'];
$ordno=ord.rand(100,500);
if(mysql_query("insert into orders(productno,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:ordersent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

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
        
        <li class="nav-item" style="margin-right:300px;">
          <a class="btn" href="contact.php">Contact</a>
        </li>
       
      </ul>
    </div>
  </nav>
  
      <div class="alert alert-success" role="alert">
       <marquee direction="right">Thank You For ordering!</marquee>
      </div>
      <div class="container" align="center">
        <h4>Order Form</h4>
        <?php
			include("connection.php");
			$sel=mysql_query("select * from item  where img='$i' ");
			$mat=mysql_fetch_array($sel);
			
			
			?>
      <form method="post">
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Product No.</label>
          <div class="col-sm-10">
            <input type="text" name="prodno" value="<?php echo $mat['prod_no'];?>" class="form-control" >
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Price </label>
          <div class="col-sm-10">
            <input type="text" name="price" value="<?php echo $mat['price'];?>" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" name="nam" class="form-control" id="inputEmail3" required>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-10">
            <input type="text" name="pho" class="form-control" required>
          </div>
        </div>
        
       <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
            <input type="text" name="add" class="form-control" required>
          </div>
        </div>
       
        <input type="submit" name="ord" value="Sent " class="btn btn-success" />
				 <input type="cancle" name="cancle" value="Cancle" class="btn btn-danger" />
      </form>
    </div>



      <div style=" height: 40px;; background-color: rgb(120, 95, 95);">
      
        <p style="color:white;
                  
                  text-align: center;" >Copyright &copy;  <strong>StarFashionCompany</strong>. All Rights Reserved. <span>Design By Myan</span></p>
                  
      </div>
</body>

</html> 