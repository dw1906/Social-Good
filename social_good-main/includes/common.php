<?php
$con=mysqli_connect("localhost:3308","root","","socialgood") or die(mysqli_error($con));
if(!isset($_SESSION)){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
?>


