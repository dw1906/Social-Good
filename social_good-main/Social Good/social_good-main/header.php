<div class="navbar navbar-inverse navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
          <a href="home.html" style="color:#e8270b; margin-bottom: 0; font-family: 'Dancing Script', cursive; text-decoration:none;"><h2>Believe</h2></a>
          </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <?php 
                        if(isset($_SESSION['username'])){ 
                        ?>     
                        <li>
                        <a href="home.php"><span class="glyphicon glyphicon-user"></span> Home</a>
                        </li>
                        <li>
                            <a href="Learn.php"><span class="glyphicon glyphicon-log-in"></span> Learn</a>
                        </li>
                        <li>
                            <a href="sell.php"><span class="glyphicon glyphicon-education"></span> My Products</a>
                        </li>
                        <li>
                            <a href="shop.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shop</a>
                        </li>
                        <li>
                            <a href="logout.php"><span class="glyphicon glyphicon-phone"></span> LogOut</a>
                        </li>
                        <?php } 
                         else { ?>
                        <li>
                        <a href="home.php"><span class="glyphicon glyphicon-user"></span> Home</a>
                        </li>
                        <li>
                            <a href="learn.php"><span class="glyphicon glyphicon-log-in"></span> Learn</a>
                        </li>
                        <li>
                            <a href="shop.php"><span class="glyphicon glyphicon-education"></span> Shop</a>
                        </li>
                        <li>
                            <a href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span> Login</a>
                        </li>
                        <li>
                            <a href="signup.php"><span class="glyphicon glyphicon-phone"></span> Register</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
    </div>
</div>
    
