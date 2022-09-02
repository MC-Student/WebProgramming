<?php
include "header.php";

echo "</br>";

?>


<form id="contact" action="form_results.php" method="POST">
    <fieldset id="personInfo">
        <legend>Personal Information</legend>
        <div class="formRow">
            <label for="name">Name*</label>
            <input name="name" id="name" type="text" placeholder="first and last name" required/>
        </div>
        <div class="formRow">
            <label for="street">Street Address</label>
            <input name="street" id="street" type="text"/>
        </div>
        <div class="formRow">
            <label for="city">City*</label>
            <input name="city" id="city" type="text" required/>
        </div>
        <div class="formRow">
            <label for="state">State</label>
            <input name="state" id="state" type="text"/>
        </div>
        <div class="formRow">
            <label for="zip">Postal code</label>
            <input name="zip" id="zip" type="text"/>
        </div>
        <div class="formRow">
            <label for="phone">Phone number</label>
            <input name="phone" id="phone" type="tel"/>
        </div>
        <div class="formRow">
            <label for="mail">Email*</label>
            <input name="email" id="mail" type="email" required/>
        </div>
        <div class="formRow">
            <label for="info">How did you find us?<br/>(select all that apply)</label>
            <select name="infoSrc" id="info" multiple>
                <option value="acm">LCW ACM</option>
                <option value="google">Google search</option>
                <option value="student">Touro student</option>
                <option value="staff">Touro staff</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="formRow">
            <label for="favpage">Which page did you find most helpful?</label>
            <input name="favPage" id="favpage" type="text"/>

        </div>
        
        <input name="mailMe" id="email" value="yes" type="checkbox"/>
        <label for="email">Please subscribe me to LCW ACM marketing e-mails!</label>
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
            <label for="rangeBox">How would you rate this website overall?*<br/> (0=poor; 10=great)</label>
            0
            <input name="webRate" id="rangeBox" type="range" value="5" step="1" min="0" max="10" required/>
            10
        </div>
        <label for="commBox">Any other feedback?</label>
        <textarea name="feedback" id="commBox"></textarea>
    </fieldset>
    <div id="buttons">
        <input type="submit" name = "submit" value="Submit My Survey"/>
        <input type="reset" name = "reset" value="Cancel"/>
    </div>
</form>

<?php

include "footer.php"; 

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

   


