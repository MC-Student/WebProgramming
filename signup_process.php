<?php

if (isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $pwd_repeat = $_POST["pass-repeat"];

    require_once "dbHandler.php";
    require_once "functions.php";
    
    if(emptyInputSignup($name, $email, $username, $password, $pwd_repeat)!== false)
    {
        header("location: sign_up.php?error=emptyinput");
        exit();
    }
    
    if(invalidUid($username)!== false)
    {
        header("location: sign_up.php?error=invaliduid");
        exit();
    }
    
    if(invalidEmail($email)!== false)
    {
        header("location: sign_up.php?error=invalidemail");
        exit();
    }
    
    if(passwordMatch($password, $pwd_repeat)!== false)
    {
        header("location: sign_up.php?error=pwdnomatch");
        exit();
    }
    
    if(usernameExists($conn, $username)!== false)
    {
        header("location: sign_up.php?error=usernametaken");
        exit();
    }
    
    createUser($conn, $name, $email, $username, $password);
}

else
{
    header("location: sign_up.php");
    exit();
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

