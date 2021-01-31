<?php require('server.php')?>
<?php
if(!isset($_SESSION['username'])){
    header('location: home.php?logon= Please Login to Continue!');
}
?>

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
    <body style="padding-top:50px;">
        <?php
            include 'header.php';
            include 'check_if_added.php';
            $username = $_SESSION['username'];
        ?>
  
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        echo "<h4 class='text-center'>Welcome $username</h4>";
                        echo "<p class='text-center' style='color:green;'>We have the best Mobile phone from Biggest Brands for you. No need to hunt around, we have all in one place.</p>"
                    ?>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Handicraft Princess</div>
                            <div class="panel-body"><img src="images/art-cart.jpeg" class="img-responsive phone" alt="Art-cart"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">The Art-Cart</h4>
                                <p>Come,witness the beauty of the Art-Cart,which is all set to make your place shine.</p>
                                <p class="p-bold">Price : 2500/-</p>
                                <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=1" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Beauty Of TamilNadu</div>
                            <div class="panel-body"><img src="images/woven.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Co-Kalakaar</h4>
                                <p>Witness the DakshinChitra and contribute to make this world a beautiful place.</p>
                                <p class="p-bold">Price : 4700/-</p>
                                <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=2" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">The time stamp</div>
                            <div class="panel-body"><img src="images/watch.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Watches</h4>
                                <p>Experience how the needles tick to the beauty of time</p>
                                <p class="p-bold">Price : 9900/-</p>
                                <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=3" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Painting</div>
                            <div class="panel-body"><img src="images/painting.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Cheriyal Scroll Painting</h4>
                                <p>Beautiful painting by the most underrated women of India</p>
                                <p class="p-bold">Price : 5300/-</p>
                                <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=4" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Bamboo bags</div>
                            <div class="panel-body"><img src="images/bamboo.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Bamboo beauty</h4>
                                <p>Extract the beautiful bamboo.. </p>
                                <p class="p-bold">Price : 4190/-</p>
                                <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=5" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body"><img src="img/mi-redmi-k20-pro.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi K20 Pro</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 29,999/-</p>
                                <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=6" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 7</div>
                            <div class="panel-body"><img src="img/mi-note-8.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi Note 8</h4>
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 20MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 6GB ROM:64GB</p>
                                <p class="p-bold">Price : 9,999/-</p>
                            <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(7)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=7" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 8</div>
                            <div class="panel-body"><img src="img/iphone-7.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 7</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 12MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 29,999/-</p>
                                <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(8)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=8" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 9</div>
                            <div class="panel-body"><img src="img/samsung-galaxy-a51.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy A51</h4>
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 12MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 25,250/-</p>
                               <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(9)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=9" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 10</div>
                            <div class="panel-body"><img src="img/samsung-galaxy-s-9.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S9</h4>
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 24MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 30,999/-</p>
                               <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(10)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=10" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 11</div>
                            <div class="panel-body"><img src="img/samsung-galaxy-s10.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S10</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 20MP + 20MP| 16MP Front Camera</p>
                                <p>RAM : 12GB ROM:1024GB</p>
                                <p class="p-bold">Price : 1,29,999/-</p>
                                <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(11)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=11" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 12</div>
                            <div class="panel-body"><img src="img/samsung-galaxy-s20-ultra.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S20 Ultra</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 97,999/-</p>
                                <?php
                            if(!isset($_SESSION['username'])){?>
                            <p><a href="#" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(12)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=12" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require('footer.php')?>
</body>
</html>