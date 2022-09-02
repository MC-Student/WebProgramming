<?php
    include "header.php";
    require_once "dbHandler.php";
    require_once "functions.php"; 
    
    if(isset($_POST['submit']))
    {        
        // Taking values from the form data(input)
        $name =  $_POST['name'];
        
        if(isset($_POST['street'])){$street =  $_POST['street'];}
        else{$street = "";}
        
        $city = $_POST['city'];
        
        if(isset($_POST['state'])){
        if($_POST['state'] == 1){$state = "";}
        else{$state = $_POST['state_name'];}
        }
        
        if(isset($_POST['zip'])){$zip = $_POST['zip'];}
        else{$zip = "";}
        
        if(isset($_POST['phone'])){$phone = $_POST['phone'];}
        else{$phone = "";}
        
        $email = $_POST['email'];
        
        if(isset($_POST['infoSrc'])){
        if($_POST['infoSrc'] == 1){$infoSrc = "";}
        else{$infoSrc = $_POST['infoSrc'];}
        }
        
        if(isset($_POST['favPage'])){
        if($_POST['favPage'] == 1){$favPage = "";}
        else{$favPage = $_POST['favPage'];}
        }
        
        if(isset($_POST['mailMe'])){$mailMe = $_POST['mailMe'];} else{$mailMe = "";}
        
        if(isset($_POST['visitDate'])){$visitDate = $_POST['visitDate'];}
        else{$visitDate = "";}
        
        if(isset($_POST['infoH'])){$infoH = $_POST['infoH'];}
        else{$infoH = "";}
        
        if(isset($_POST['Correct'])){$Correct = $_POST['Correct'];}
        else{$Correct = "";}
        
        $webRate = $_POST['webRate'];
        
        if(isset($_POST['feedback'])){$feedback = $_POST['feedback'];}
        else{$feedback = "";}

        $sql = "INSERT INTO contact_form (name, street, city, state, zip, phone, email, source, page, marketing, date, helpful, correct, rating, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
        {
        header("location: contact_us2.php?error=stmtfailed");
        exit();
        }
        
        mysqli_stmt_bind_param($stmt, "sssssssssssssss", $name, $street, $city, $state, $zip, $phone, $email, $infoSrc, $favPage, $mailMe, $visitDate, $infoH, $Correct, $webRate, $feedback);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        echo nl2br("\nThank you for contacting us! You said: \n\n\nName: $name\n\n Address:\n\n $street $city $state $zip\n\n Contact information: "
                . "\n\n $phone $email \n\n Your experience: \nHow did you hear about us? $infoSrc "
                . "\n\n Which page did you find most helpful? $favPage \n\n  Subscribe to LCW ACM emails: $mailMe "
                . "\n\n Date viewed: $visitDate \n\n Was the information helpful? $infoH "
                . "\n\n Was the information correct? $Correct \n\n How would you rate this website overall? $webRate "
                . "\n\n Any other feedback? $feedback");
    }
    
    include "footer.php";

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

