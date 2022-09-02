<?php
include "header.php";
?>

<br>

<form id="login" action="authorized_user_check.php" method="POST">
    <input autocorrect="off" spellcheck="false" autocomplete = "username" placeholder = "username/email" name="username" id="username" type="text" required/>
    <input autocorrect="off" spellcheck="false" autocomplete = "password" placeholder = "password" name="password" id="password" type="password" required/>
    <input type="submit" name = "submit" value="Log in"/>
</form>

<?php
    
    if(isset($_GET["error"]))
{
    if($_GET["error"] == "emptyinput")
    {
        echo "<p>Please fill in all of the fields!</p>";
    }
    else if($_GET["error"] == "wronglogin")
    {
        echo "<p>Username or password entered is incorrect. Please try again!</p>";
    }
}
    
    ?>

<br>

<?php

include "footer.php";

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


