<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
 ?>
<?php
error_reporting(1);
include("connection.php");
$img=$_FILES['img']['name'];
$prono=$_POST['t1'];
$price=$_POST['t2'];
if($_POST['sub'])
{$qry="INSERT INTO item(img,prod_no,price)VALUES('$img','$prono','$price')";
$result=mysql_query($qry) or die ("save items query fail.");
if($result)			
	   {mkdir("image/$i");
			move_uploaded_file($_FILES['img']['tmp_name'],"image/$i".$_FILES['img']['name']);	
  // move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
		
	    $err="<font size='+2'>item inserted successfully</font>";
	
		}
	else
	 {
	   echo "item is not inserted";
	   }
	}  
	mysql_close($con);
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
          <a class=" btn" href="home.php">Home</a>
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
       <marquee direction="right">You can add New Product Here!!!</marquee>
      </div>
      <br><br>


      <form  name="testform" method="post" enctype="multipart/form-data" >
      <div class="container">
        <div class="row">
            <div class="col"><span>Image:</span></div>
            <div class="col"><input type="file" name="img"/></div>
        </div><br>
        <div class="row">
            <div class="col"><span>Product Name:</span></div>
            <div class="col"><label>
                <input name="t1" type="text" id="t1">
              </label></div>

        </div><br>
        <div class="row">
            <div class="col"><span>Price:</span></div>
            <div class="col"><label>
                <input name="t2" type="text" id="t2">
              </label></div>
        </div><br>
        <div class="row">
            <div class="col" align="center"><input class="btn btn-dark" name="sub" type="submit" value="Submit"></div>
        </div>
      </div>
       

      </form>
      <div  id="ff">
      <div class="foot ">
        <p style="text-align: center;">Copyright &copy;  <strong>StarFashionCompany</strong>. All Rights Reserved. <span>Design By Myan</span></p>
        </div>            
      </div>
   <?php }  ?>
      
</body>

</html> 