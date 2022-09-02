<?php
    
session_start();

include "header.php";

if (isset($_POST['submit']))
{    
    $username = $_POST['username'];
    $password = $_POST['password'];

$valid_usernames = array("user_test_1","user_test_2","user_test_3");

$valid_passwords = array("password1","password2","password3");

for($i = 0; $i < 3; $i++){
    if ($valid_usernames[$i] == $username && $valid_passwords[$i] == $password){
            setcookie('current_user', $username);
            $_SESSION['LoggedIn'] = "true";
            break;
    }
    else
    {
                $_SESSION['LoggedIn'] = "false";
        }
}
    echo "Click " . "<a href = 'greet.php'>here</a>". " to access member content.";
}  

include "footer.php";

    
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

