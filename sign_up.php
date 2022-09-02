<?php
include "header.php";
?>

<section class = "sign-up-form">
    <h2>Sign up</h2>
    <form action = "signup_process.php" method = "post">
        <input type = "text" name = "name" placeholder = "Full name">
        <input type = "text" name = "email" placeholder = "Email">
        <input type = "text" name = "username" placeholder = "Username">
        <input type = "password" name = "password" placeholder = "Password">
        <input type = "password" name = "pass-repeat" placeholder = "Confirm password">
        <button type = "submit" name = "submit">Sign up!</button>
    </form>
    
    <?php
    
    if(isset($_GET["error"]))
{
    if($_GET["error"] == "emptyinput")
    {
        echo "<p>Please fill in all of the fields!</p>";
    }
    else if($_GET["error"] == "invaliduid")
    {
        echo "<p>Please change your username. It can only include letters and numbers.</p>";
    }
    else if($_GET["error"] == "invalidemail")
    {
        echo "<p>Please enter a valid email!</p>";
    }
    else if($_GET["error"] == "pwdnomatch")
    {
        echo "<p>Passwords don't match!</p>";
    }
    else if($_GET["error"] == "stmtfail")
    {
        echo "<p>Something went wrong, please try again!</p>";
    }
    else if($_GET["error"] == "usernametaken")
    {
        echo "<p>That username was already taken!</p>";
    }
    else if($_GET["error"] == "none")
    {
        echo "<p>You have signed up!</p>";
    }
}
    
    ?>
    
</section>

<?php


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include "footer.php";
