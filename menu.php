
<!--<div id="logo"><a href="index.php"><img src="image_files/lcw_acm_logo.png" alt = "LCW-ACM logo"/></a></div>-->
  
<div id="main_menu">
    
    <div id="logo_area">
        <a href="index.php"><img class = "logo_img" src="image_files/lcw_acm_logo.png" alt = "LCW-ACM logo"/></a>
    </div>
    
<div id="inner_main_menu">
    
<ul>
    
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="temp.php">About Us</a>
      <a href="temp.php">Mission</a>
      <a href="temp.php">Leadership</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Get Involved</a>
    <div class="dropdown-content">
      <a href="sign_up.php">Sign up</a>
      <a href="temp.php">Membership</a>
      <a href="temp.php">Events</a>
      <a href="temp.php">Donate</a>
    </div>
  </li>
  
    <?php
        if (isset($_SESSION["auth_userID"]))
        {
            echo "<li class='dropdown'>";
            echo "<a href='javascript:void(0)' class='dropbtn'>Members</a>";
            echo "<div class='dropdown-content'>";
            echo"<a href='temp.php'>Guidelines</a>";
            echo"<a href='temp.php'>Meetings</a>";
            echo "<a href='connect.php'>Connect</a>";
            echo "</div></li>";
        }
        
        else
        {
            echo "<li class='dropdown'>";
            echo "<a href='javascript:void(0)' class='dropbtn'>Members</a>";
            echo "<div class='dropdown-content'>";
            echo"<a href='temp.php'>Guidelines</a>";
            echo"<a href='temp.php'>Meetings</a>";
            echo "</div></li>";
        }
    ?>
  
  <li><a href="temp.php">Resources</a></li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Connect</a>
    <div class="dropdown-content">
      <a href="contact_us2.php">Contact Us</a>
      <a href="email_us.php">Email Us</a>
    </div>
  </li>
    
  <?php
    if (isset($_SESSION["auth_userID"]))
    {
        echo "<li style='float:right'><a href='logout_process.php'>Log out</a></li>";
    }
    else
    {
        echo "<li style='float:right'><a href='log_in.php'>Log in</a></li>";
    }
  ?>
  
</ul>
    
</div>
    
</div>

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */



    