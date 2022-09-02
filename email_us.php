<?php
include "header.php";
include "dbHandler.php";

echo "</br>";

?>

<form id="email" action="mail.php" method="POST">
        <div class="formRow">
            <label>Name</label>
            <input name="name" id="name" type="text" required/>
        </div>
        <div class="formRow">
            <label>Email</label>
            <input name="email" id="email" type="email" required/>
        </div>
        <div class="formRow">
            <label>Subject</label>
            <input name="subject" id="subject" type="text"/>
        </div>
        <div class="formRow">
            <label>Message</label>
            <input name="message" id="message" type="textarea"/>
        </div>
    <div id="buttons">
        <input type="submit" name = "submit" value="Send Email"/>
        <input type="reset" name = "reset" value="Cancel"/>
    </div>
</form>

<?php

include "footer.php"; 


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

