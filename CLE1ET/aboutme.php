<?php
$show = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    </head>
    <body>
        <div id="abtwrapper">
            <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="aboutme.php" class="active">About Me</a>
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
            <div id="testimonial">
                <article>
                    <h1>about me</h1>
                    <img src="ID.jpeg">
                    <blockquote>
                        "My name is Ralph, I'm 20 years old from Sagay City, Negros Occidental. I like computer and sports." 
                    </blockquote>
                    <h5>Ralph Nestor Lazarte</h5>
                    <p>IT Student from USLS Bacolod.</p>
                </article>
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