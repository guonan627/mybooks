<?php
session_start();
    echo '<br>';
    session_unset(); 
    session_destroy(); 
    echo '<br>';
    echo 'You have successfully logged out <br>';
    header("location:../index.php");  
?>