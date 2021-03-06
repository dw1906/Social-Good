<?php require('server.php')?>
<?php 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
<head>
    <title>Believe | Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .mySlides {display:none;}
    </style>
</head>
<body style="background-color: #4158D0;
background-image: linear-gradient(71deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);">
    <?php include('header.php') ?>
    <div class="w3-content w3-section" style="width: 100%; overflow: hidden; margin:auto; object-fit: cover;">
    <img class="mySlides w3-animate-fading" src="images/1.jpeg" style="width:100% ">
    <img class="mySlides w3-animate-fading" src="images/7.jpeg" style="width:100% ">
    <img class="mySlides w3-animate-fading" src="images/3.jpg" style="width:100% ">
    </div>
    <div class="content" style="margin-top:30px; margin-right:15px;">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="background-color:rgb(47,162,7); color:white;">
                            Learn
                        </div>
                        <div class="panel-body hover03">
                            <figure><img src="images/4.jpg" class="img-responsive phone"alt="img1"></figure>
                        </div>
                        <div class="panel-footer">
                               <p>Learn new skills and take the first step towards Self-reliance!</p> 
                               <a href="learn.php" style="text-decoration:none;"><button class="btn btn-primary btn-block">Learn Now!</button></a>
                        </div>
                     </div>
                   </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading" style="background-color:rgb(47,162,7); color:white;">Grow</div>
                            <div class="panel-body hover03"><figure><img src="images/5.jpg" class="img-responsive phone" alt="Phone"></figure></div>
                            <div class="panel-footer">
                                <p>Showcase this world,what a women can do by selling your products at the right price!</p>
                                <a href="signup.php" style="text-decoration:none;"><button class="btn btn-primary btn-block">Sell Now!</button></a>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                        <div class="panel-heading" style="background-color:rgb(47,162,7); color:white;">Support</div>
                        <div class="panel-body hover03"><figure><img src="images/6.jpg" class="img-responsive phone" alt="Phone"></figure></div>
                        <div class="panel-footer">
                            <p>Order and support one of the most underrated talents!</p>
                            <a href="shop.php" style="text-decoration:none;"><button class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    var myIndex = 0;
    carousel();
    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); 
    }
    </script>    
    <?php include('footer.php')?>
    </body>

</html>