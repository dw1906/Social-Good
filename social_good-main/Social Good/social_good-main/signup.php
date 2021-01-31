<?php include('server.php') ?>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>  
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      .required:after {
        content:" *";
        color: red;
      }
    </style>
  </head>
  <body style="background-color: #4158D0;
background-image: linear-gradient(71deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);">
    <?php include('header.php') ?>
    <div class="h-100 center pt3 pb6 ">
      <div class="m14 pv4 mid-gray sans-serif">
          <div class="row mv6 w-90 w-80-m w-60-l center cf cover wrap bg-center shadow-1 bg-light-gray " style="display:flex;column-count:2;column-width: auto;" >
              <div class="column w-80 w-70-m w-60-l fr " style=" overflow:hidden;float: left;">
              <video  autoplay width="400" height="500" muted loop id="myVideo">
                <source src="images/bunny.mp4" type="video/mp4" style="position: fixed;
                width: 1000px;
                height: auto ;background-size: cover;"> 
              </video>
              </div>
              <div class="column w-80 w-70-m w-60-l fr bg-white">
                    <header class="pa3 bb b--light-gray relative">
                        <h1 class="b ma0 f2">Register</h1>
                    </header>
                    <form id="register-form" action="signup.php" method="post" class="ph3 pt3 pb4 f4">
                        <?php include('errors.php'); ?>  
                        <br/>  
                        <div class="mb4">
                            <label for="" class="required db ttu b lh-copy">User Name</label>
                            <input name="username" placeholder="Enter Name" type="text" required="true"  class="input-reset w-100 mw-100 bn br1 pa2 bg-light-gray" />
                        </div>
                        <div class="mb4">
                          <label for="" class="required db ttu b lh-copy">Email</label>
                          <input name="email" placeholder="Enter Email" type="email" required="true"  class="input-reset w-100 mw-100 bn br1 pa2 bg-light-gray" />
                        </div>
                        <div class="mb4">
                            <label for="" class="required db ttu b lh-copy">Date Of Birth</label>
                            <input name="dob" required="true"  type="date" class="input-reset w-100 mw-100 bn br1 pa2 bg-light-gray" />
                        </div>
                        <div class="mb4">
                            <label for="" class="required db ttu b lh-copy">Password</label>
                            <input name="password_1" placeholder="Enter Password" required="true"  type="password" class="input-reset w-100 mw-100 bn br1 pa2 bg-light-gray" />
                        </div>
                        <div class="mb4">
                            <label for="" class="required db ttu b lh-copy">Confirm Password</label>
                            <input name="password_2" placeholder="Enter Password" required="true"  type="password" class="input-reset w-100 mw-100 bn br1 pa2 bg-light-gray" />
                        </div>
                        <div class="mb4 tc f4">
                            Do you have an account? <a href="login.php" class="blue ph1 pointer">Login!</a>
                        </div>
                        <div class="tc">
                        <button class="f2 grow no-underline br-pill ph3 pv2 mb2 dib white bg-dark-blue" name="reg_user" type="submit">Register</button>
                        </div>
                    </form>
              </div>
          </div>
      </div>
    </div>

    <?php require('footer.php')?>
  </body>
</html>