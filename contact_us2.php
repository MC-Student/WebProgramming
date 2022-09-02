<?php
include "header.php";
include "dbHandler.php";

echo "</br>";

?>

<form id="contact" action="form_results.php" method="POST">
    <fieldset id="personInfo">
        <legend>Personal Information</legend>
        <div class="formRow">
            <label for="name">Name *required</label>
            <input name="name" id="name" type="text" placeholder="first and last name" minlength = "3" maxlength ="100" required/>
        </div>
        <div class="formRow">
            <label for="street">Street Address</label>
            <input name="street" id="street" type="text" minlength = "4" maxlength = "100"/>
        </div>
        <div class="formRow">
            <label for="city">City *required</label>
            <input name="city" id="city" type="text" minlength="1" maxlength = "200" required/>
        </div>
        <div class="formRow">
            <label for="state">State</label>
            <select name="state" id="state">
                <?php
                $state_results=$conn->query("select * from states_list_for_forms");
                while ($row = $state_results->fetch_assoc()) {
                     echo "<option value=".$row['state_ID'].">".$row['state_name']."</option>";
                }
                ?>
            </select>
        </div>
        <div class="formRow">
            <label for="zip">Postal code</label>
            <input name="zip" id="zip" type="text" size = "6" minlength = "4" maxlength = "10" />
        </div>
        <div class="formRow">
            <label for="phone">Phone number</label>
            <input name="phone" id="phone" type="tel" size = "15" placeholder = "000-000-0000" maxlength = "15"/>
        </div>
        <div class="formRow">
            <label for="mail">Email *required</label>
            <input name="email" id="mail" type="email" placeholder = "example@example.com" required/>
        </div>
        <div class="formRow">
            <label for="info">How did you hear about us?<br/>(select one)</label>
            <select name="infoSrc" id="info" >
                <?php
                
                $vsrc_results=$conn->query("select * from site_view_source");
                while ($vsrc_row = $vsrc_results->fetch_assoc()) {
                     echo "<option value=".$vsrc_row['view_src_ID'].">".$vsrc_row['view_src_name']."</option>";
                }
                ?>
                </select>
        </div>
        <div class="formRow">
            <label for="favpage">Which page did you find most helpful?</label>
            <select name="favPage" id="favpage" >
                <?php
                
                $page_results=$conn->query("select * from site_pages");
                while ($pages_row = $page_results->fetch_assoc()) {
                     echo "<option value=".$pages_row['page_ID'].">".$pages_row['page_name']."</option>";
                }
                ?>
                
                </select>
        </div>
        
        <input name="mailMe" id="email" value="yes" type="checkbox"/>
        <label for="email">Please subscribe me to LCW ACM e-mails! (check to subscribe) </label>
    </fieldset>
    
    <fieldset id="expInfo">
        <legend>Share Your Feedback</legend>
        <div class="formRow">
            <label for="visit">Date viewed</label>
            <input name="visitDate" id="visit" type="date"/>
        </div>
        <div class="formRow">
            <label>Was the information helpful?</label>
            <fieldset class="optGroup">
                <label for="fYes">Yes</label>
                <input name="infoH" id="fYes" value="yes" type="radio"/>
                <label for="fNo">No</label>
                <input name="infoH" id="fNo" value="no" type="radio"/>
            </fieldset>
        </div>
        <div class="formRow">
            <label>Was the information correct?</label>
            <fieldset class="optGroup">
                <label for="correctY">Yes</label>
                <input name="Correct" id="correctY" value="yes" type="radio"/>
                <label for="correctN">No</label>
                <input name="Correct" id="correctN" value="no" type="radio"/>
            </fieldset>
        </div>
        <div class="formRow">
            <label for="rangeBox">How would you rate this website overall? *required <br/> (0=poor; 10=great)</label>
            0
            <input name="webRate" id="rangeBox" type="range" value="5" step="1" min="0" max="10" required/>
            10
        </div>
        <label for="commBox">Any other feedback?</label>
        <textarea name="feedback" id="commBox"></textarea>
    </fieldset>
    <div id="buttons">
        <input type="submit" name = "submit" value="Submit Form"/>
        <input type="reset" name = "reset" value="Cancel"/>
    </div>
</form>

<?php

include "footer.php"; 

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

   


