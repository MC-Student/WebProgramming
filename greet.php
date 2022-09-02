<?php
    session_start();
    
    include "header.php";
    
    if($_SESSION['LoggedIn'] === "true")
    {
        $user_welcome = $_COOKIE['current_user'];
        echo "Hello " . $user_welcome;
    }
    
    else{
       echo "Error. You will be redirected to the log in page shortly.";
        header('refresh: 2.5; url= log_in.php');
        exit();
    }
    
    ?>



<?php
include "footer.php";

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

