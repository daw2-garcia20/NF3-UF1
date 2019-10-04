<?php

session_start();

$_POST['weight'];
$_POST['text'];
$_POST['color'];

$_POST['cookie'];
$_POST['font'];

?>

<html>
 <head>
  <title></title>
 </head>
 <body>
    <form method="post" action="P3.1AndyGarcia.php">
          
       <p>text color: 
        <input type="color" name="color"/>
       </p>
       <p>choose the font:
        <select name="font">
            <option>Comic Sans</option>
            <option>Georgia</option>
            <option>Arial</option>
        </select>
       </p>
       <p>weight for the text?
        <input type="text" name="weight"/>
       </p>     
       <p>Save info on a cookie??
        <input type="checkbox" name="cookie"/>
       </p>
        <br/>
        <br/>
        <input type="submit" name="sumbit" value="submit"/>
    </form>  
    <?php
       

        
        
    
    echo "U visited the page that times: ";
          
    $_SESSION['number']=$_SESSION['number']+1;
    echo  $_SESSION['number'];
    
    include "P3.3AndyGarcia.php";
    ?>
</body>
    