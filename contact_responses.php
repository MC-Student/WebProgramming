<?php

include "header.php";
include "dbHandler.php";

$contactform_sqlget = "SELECT * FROM contact_form;";
$contactform_sqldata = mysqli_query($conn, $contactform_sqlget) OR die("Error retrieving from database. Please reload page.");

?>
<caption><h2>Contact Form Responses</h2></caption>
<table>
<tr><th>Form ID</th><th>Name</th><th>Street Address</th><th>City</th><th>State</th><th>Postal code</th><th>Phone</th>
<th>Email</th><th>Information source</th><th>Most useful page</th><th>Subscribe to emails</th><th>View date</th><th>Helpful?</th>
<th>Correct?</th><th>Rating</th><th>Comments</th><th>Submission time</th></tr>

<?php
while($row = mysqli_fetch_array($contactform_sqldata, MYSQLI_ASSOC))
{
    echo "<tr><td>";
    echo $row['contactformid'];
    echo "</td><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['street'];
    echo "</td><td>";
    echo $row['city'];
    echo "</td><td>";
    echo $row['state'];
    echo "</td><td>";
    echo $row['zip'];
    echo "</td><td>";
    echo $row['phone'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['source'];
    echo "</td><td>";
    echo $row['page'];
    echo "</td><td>";
    echo $row['marketing'];
    echo "</td><td>";
    echo $row['date'];
    echo "</td><td>";
    echo $row['helpful'];
    echo "</td><td>";
    echo $row['correct'];
    echo "</td><td>";
    echo $row['rating'];
    echo "</td><td>";
    echo $row['comment'];
    echo "</td><td>";
    echo $row['time'];
    echo "</td></tr>";
}

echo "</table>";

include "footer.php"; 


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

