<html>
 <head>
  <title>NF3 PAC01</title>
 </head>
 <body>
<?php
    include "P3.2AndyGarcia.php";
    date_default_timezone_set('America/Los_Angeles');
    $Today = date('d');
    $yesterday = $Today-1;
    $yesterday = date('l',$Today);       
    $lastmonth = strtotime('-1 month' , strtotime(date('F')));
    $lastmonth = date('F', $lastmonth);
    $monthdays = date('t');
    $days = $monthdays  - $Today;
    $thismonth = date('m');
    $months = 12-$thismonth;
 
    echo "Yesterday it was ", $yesterday;
    echo "<br/>";
    echo "The previous month is ", $lastmonth;
    echo "<br/>";
    echo "There are ", $days, " days left in this month.<br/>";
    echo "There are ", $months, " months left in the current year.<br/>";
    
    if($thismonth>=3 && $thismonth<=5){
    echo "<h1>good spring</h1>";
    }else if($thismonth>=6 && $thismonth<=8){
    echo "<h1>good summer</h1>";
    }else if($thismonth>=9 && $thismonth<=11){
    echo "<h1>good atumn</h1>";    
    }else if($thismonth>=12 && $thismonth<=2){
    echo "<h1>good winter</h1>";
    }
    
    $color=$_POST['color'];
    $font=$_POST['font'];
    $weight=$_POST['weight'];
    $texto="Prueba de ajustes";
    
    echo '<div style="color:' .$color. '; font-family:' .$font.'; font-size:' .$weight.';">Texto prueba</div>';
       
   
?>
 </body>
</html>