<?php include('server.php')?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Shop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body style="background-color: #4158D0;
background-image: linear-gradient(71deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);padding-top:50px;">
        <?php include('header.php')?>
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        echo "<h4 class='text-center'>Welcome $username</h4>";
                        echo "<p class='text-center' style='color:green;'>We have the best Products for you. No need to hunt around, we have all in one place.</p>"
                    ?>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Handicraft Princess</div>
                            <div class="panel-body"><img class="center" src="images/27.jpg" class="img-responsive phone" alt="Art-cart"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">The Art-Cart</h4>
                                <p>Come,witness the beauty of the Art-Cart,which is all set to make your place shine.</p>
                                <p class="p-bold">Price : 2500/-</p>
                                <button class="btn btn-primary btn-block">Order Now!</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Beauty Of TamilNadu</div>
                            <div class="panel-body"><img class="center" src="images/21.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Co-Kalakaar</h4>
                                <p>Witness the DakshinChitra and contribute to make this world a beautiful place.</p>
                                <p class="p-bold">Price : 4700/-</p>
                                <button class="btn btn-primary btn-block">Order Now!</button>
                            </div>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">The time stamp</div>
                            <div class="panel-body"><img class="center"src="images/22.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Watches</h4>
                                <p>Experience how the needles tick to the beauty of time</p>
                                <p class="p-bold">Price : 9900/-</p>
                                <button class="btn btn-primary btn-block">Order Now!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Painting</div>
                            <div class="panel-body"><img class="center" src="images/23.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Cheriyal Scroll Painting</h4>
                                <p>Beautiful painting by the most underrated women of India</p>
                                <p class="p-bold">Price : 5300/-</p>
                                <button class="btn btn-primary btn-block">Order Now!</button>
                               </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Item 24</div>
                            <div class="panel-body"><img class="center"src="images/30.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Bamboo items</h4>
                                <p>Anything.....</p>
                                <p class="p-bold">Price : 29,999/-</p>
                                <button class="btn btn-primary btn-block">Order Now!</button>
                           
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require('footer.php')?>
</body>
</html>