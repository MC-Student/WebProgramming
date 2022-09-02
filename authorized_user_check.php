<?php
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    setcookie('person', $username);
    
    require_once "dbHandler.php";
    require_once "functions.php";
    
   if(emptyInputLogin($username, $password)!== false)
    {
        header("location: log_in.php?error=emptylogin");
        exit();
    }        
    
    authorizeUser($conn, $username, $password);

}
    
else
    {
        header("location: log_in.php");
        exit();
    }
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

