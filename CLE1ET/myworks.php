<?php
$show = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Works</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    </head>
    <body>
        <div id="about">
            <h1>My Works</h1>
        </div>
        <?php include 'navbar.php' ?>
        
        <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="aboutme.php" class="active">About Me</a>
  <div class="dropdown">
    <button class="dropbtn">My Works 
      <i class="fa fa-caret-down"></i>
    </button>
  </div> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
       
    </body>
</html>