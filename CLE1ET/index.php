<?php
$show = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Website</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    </head>
    <body>
        <div id="wrapper">
            <h1>Welcome to my Website.</h1>
        <div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="aboutme.php">About Me</a>
  <div class="dropdown">
    <button class="dropbtn">My Works 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://learningtasklazarte.herokuapp.com/LT2/Index.html" target="blank">LT2</a>
      <a href="https://learningtasklazarte.herokuapp.com/LT3/index.html" target="blank">LT3</a>
      <a href="https://learningtasklazarte.herokuapp.com/LT4/index.html" target="blank">LT4</a>
        <a href="https://github.com/cannawarp/learningtask/tree/main/LT5" target="blank">LT5</a>
        <a href="https://learningtasklazarte.herokuapp.com/CLE1MT/index.html" target="blank">CLE1MT</a>
    </div>
  </div> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
            </div>
        
        
        <?
        switch($show){
            case 'navigation':
        <?php include 'navbar.php' 
        ?>
        }
    </body>
</html>