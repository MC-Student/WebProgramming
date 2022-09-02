<?php
session_start();
?>

<!DOCTYPE html>
<!--header.php should at a minimum include all header code, including a link to CSS and initial BODY tag, site logo, menu-->
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCW ACM</title>
    
    <link href="basic_design.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="ResponsiveSlides.js-master\responsiveslides.min.js"></script>
    <script>
  $(function() {
    $(".rslides").responsiveSlides({auto: true, speed: 500, timeout: 3500, pager: false, nav: false});
  });
</script>

</head>

<body>
    
    <?php
    
    include "menu.php";

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

