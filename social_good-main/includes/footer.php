<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 style="color: #fff;"><b>Information</b></h4>
                <p><a href="about.php" style="color: #fff;">About Us</a></p>
                <p><a href="contact.php" style="color: #fff;">Contact Us</a></p>
            </div>
            
            <div class="col-md-4">
                <h4 style="color: #fff;"><b>My Account</b></h4>
                <?php if(!isset($_SESSION['email'])){?>
                <p><a  style="color: #fff;" href="#" data-toggle="modal" data-target="#login-modal">Login</a></p>
        <p><a href="signup.php" style="color: #fff;">Sign Up</a></p>
        <?php }
                else{ ?>
                 <p><a style="color: #fff;" href="settings.php">Settings</a></p>
                    <p><a style="color: #fff;" href="logout.php">Log Out</a></p>
                <?php } ?>
            </div>

            <div class="col-md-4">
                <h4 style="color: #fff;"><b>Contact Us</b></h4>
                <p style="color: #fff;"><span class="glyphicon glyphicon-phone" style="color: #fff;"></span> : +91-282-0000886</p>
                <p style="color: #fff;"><span class="glyphicon glyphicon-envelope" style="color: #fff;"></span> : mobile2@shop.com</p>
            </div>
            </div>
    </div>
 </footer>
 
       