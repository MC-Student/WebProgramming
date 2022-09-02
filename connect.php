<?php

include "header.php";

echo "<br><br><br>";

if (isset($_COOKIE['person'])){
echo "Hello <strong>". $_COOKIE['person'] . "</strong>, this is the connect page only logged in members (like you!) can access.";
}

echo "<br>";
echo "<br>";
echo "<br>";

include "footer.php";

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

