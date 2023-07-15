
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
    
    <title>Product Page</title>
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
        
      </ul>
    </div>
  </nav>
  
      <div class="alert alert-success" role="alert">
       <marquee direction="right">Welcome to Our OnlineFashionStore &#9742;-09453432435</marquee>
      </div>
      <img src="images/pbanner.jpg" height="50px" class="img-fluid" alt="banner"><br><br><hr>
      
      <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from item ");
						echo"<form method='post'><table border='0' align='center'><tr>";
   $n=0;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['img'];
   
    if($n%3==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><img src='admin/image/$i' height='200' width='200'><br/>
 
 <b>product name:</b>".$arr['prod_no'].
   "<br><b>Price:</b>&nbsp;".$arr['price'].
  "<br><a href='login.php?img=$i' class='btn btn-dark'><b>Buy</b></a>
   
   </td>";
  
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>	
    </div>      
      <div style=" height: 40px;; background-color: rgb(120, 95, 95);">
      
        <p style="color:white;
                  
                  text-align: center;" >Copyright &copy;  <strong>StarFashionCompany</strong>. All Rights Reserved. <span>Design By Myan</span></p>
                  
      </div>
</body>

</html> 