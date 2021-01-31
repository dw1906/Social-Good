<?php include('server.php')?>
<html>
<head>
    <title>Add Item</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <body>
        <?php include('header.php')?>
        <div style="ma5 pa5">
            <form id="sell-form" action="AddItem.php" method="post" enctype="multipart/form-data" class="ph3 mv5 pt3 pb4 f4">
                <div class="mb3">
                    <label for="" class="db ttu b lh-copy">Item Name</label>
                    <input name="itemName" type="text" required="true"  class="input-reset w-100 mw-100 bn br1 pa2 bg-light-gray" />
                </div>
                <div class="mb3">
                    <label for="" class="db ttu b lh-copy">Price</label>
                    <input name="price" required="true" value="50" type="number" class="input-reset w-100 mw-100 bn br1 pa2 bg-light-gray" />
                </div>
                <div class="mb3">
                    <label for="" class="db ttu b lh-copy">Add Description</label>
                    <textarea name="description" type="text" required  class="input-reset w-100 mw-100 bn br1 pa2 bg-light-gray" ></textarea>
                  </div>
                <div class="mb3">
                    <label for="" class="db ttu b lh-copy">Upload Image</label>
                    <input name="fileToUpload" required="true"  type="file" class="input-reset w-100 mw-100 bn br1 pa2 bg-light-gray" />
                </div>
                <div class="tc">
                <button class="f4 grow no-underline br-pill ph3 pv2 mb2 dib white bg-dark-blue" name="upload" type="submit">Add Item</button>
                </div>
            </form>
        </div>    
    </body>
</html>