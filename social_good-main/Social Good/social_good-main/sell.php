<?php require('server.php')?>
<html>
    <head>
        <title>
            Sell Item
        </title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>  
    </head>
    <body>
        <?php include('header.php') ?>                      
        <div style="margin:auto; padding:auto; align-content: center;">
            <div class="row" style="display:flex;column-count:2;background-color: rgb(229, 92, 247);">
                <div class="column ma4 pl6" style="flex:50%; float:left;">
                    <h1>Items</h1>
                </div>
                <div class="column tc pr4"  style="flex:50%; float:right;">
                    <a class="f3 grow no-underline br-pill ph3 pv2 mb2 dib white bg-blue ma5 " style="flex:50%; float:right;" type="submit" href="addItem.php">Add Item</a>
                </div>
            </div>
            <br/>
            <div class="content" style="margin-top:30px; margin-right:15px;">
                <div class="container-fluid">
            <div class="row ma3 text-center " style="display:flex; column-count:3; column-width: auto;">
                <div class="column br2 ba dark-gray b--black-30 mv4 w-100 w-80-m w-25-l mw5 center" >
                <img src="images/17.jpg" class="db w-100 br2 br--top" alt="macrame">
                    <div class="pa2 ph3-ns pb3-ns">
                    <div class="dt w-100 mt1">
                        <div class="dtc">   
                        <h1 class="f4 f3-ns mv0">Macrame Wall Hanging</h1>
                        </div>
                        <div class="dtc tr">
                        <h2 class="f4 mv0">Rs.1000/-</h2>
                        </div>
                    </div>
                    <p class="f5 lh-copy measure mt2 mid-gray">
                        Beautiful Wall hanging by .....
                    </p>
                    </div>
                </div>
                <div class="column br2 ba dark-gray b--black-30 mv4 w-100 w-80-m w-25-l mw5 center">       
                <img src="images/18.jpg" class="db w-100 br2 br--top" alt="greeting card">
                    <div class="pa2 ph3-ns pb3-ns">
                    <div class="dt w-100 mt1">
                        <div class="dtc">
                        <h1 class="f4 f3-ns mv0">Greeting Card</h1>
                        </div>
                        <div class="dtc tr">
                        <h2 class="f4 mv0">Rs.200/-</h2>
                        </div>
                    </div>
                    <p class="f5 lh-copy measure mt2 mid-gray">
                        Beautiful Greeting Card by .....
                    </p>
                    </div>
                </div>
                <div class="column br2 ba dark-gray b--black-30 mv4 w-100 w-80-m w-25-l mw5 center">
                    <img src="images/19.jpg" class="db w-100 br2 br--top" alt="butterflies">
                        <div class="pa2 ph3-ns pb3-ns">
                        <div class="dt w-100 mt1">
                            <div class="dtc">
                            <h1 class="f4 f3-ns mv0">Craft Items</h1>
                            </div>
                            <div class="dtc tr">
                            <h2 class="f4 mv0">Rs.400/-</h2>
                            </div>
                        </div>
                        <p class="f5 lh-copy measure mt2 mid-gray">
                            Beautiful Butterflies by .....
                        </p>
                        </div>
                        </div>
                        </div>
                </div>
              </div>             
        </div>
        <?php require('footer.php')?>
    </body>
</html>