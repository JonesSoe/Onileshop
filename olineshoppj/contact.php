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
    
    <title>Content Page</title>
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
       <marquee direction="right">Thank You For Your Support <br>Have a Wonderful Day!</marquee>
      </div>
      <br><br>


      <?php
        error_reporting(1);
        include("connection.php");
        if($_POST['sub'])
        { 
        $name=$_POST['t1'];
        $email=$_POST['t2'];
        $phone=$_POST['t3'];
        $mesg=$_POST['t4'];
        if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
        {$er="<font color='green' size='+1'>  Sent Successfully</font>"; }
        }
?>




            
            <div class="container">
            <h3 style=" color:white;">Contact Information</h3>
            <div class="row">
            <div class="col">
            <form method="post" name="contact" action="#">
            <div class="form-floating mb-3">
            <label for="floatingInput">Name</label>
            <input type="text"  name="t1" class="form-control" id="floatingInput" placeholder="Your Name" required>
            
            </div>
            <div class="form-floating mb-3">
            <label for="floatingInput">Email address</label>
            <input type="email" name="t2" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            
            </div>
            <div class="form-floating">
            <label for="floatingPassword">Mobile</label>
            <input type="text" name="t3" class="form-control" id="floatingPassword" placeholder="Your Ph.no" required>
            
            </div>
            <div class="form-floating">
            <label for="floatingTextarea2">Message</label>
            <textarea class="form-control" name="t4" placeholder="Leave a Message here" id="floatingTextarea2" style="height: 100px" required></textarea>
            
            </div><br>
            <input type="submit" name="sub" value="Submit" class="btn btn-success">
            </form>
            </div>
            <div class="col" style="color:white; float:left;">
            <h5>Location </h5>
                     Hledan<br />
                    NO(30) U Tun Linn Chan St,<br />
                    Kamayut Township<br /><br />
                    Email: osoe533@gmail.com<br/>
                    Tel: 097983344322<br />
            </div> 
            </div>
</div><br><br>
     
     
     
      
      <div style=" height: 40px;; background-color: rgb(120, 95, 95);">
      
        <p style="color:white;
                  
                  text-align: center;" >Copyright &copy;  <strong>StarFashionCompany</strong>. All Rights Reserved. <span>Design By Myan</span></p>
                  
      </div>
</body>

</html> 