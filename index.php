<?php

    // $clubs = range(1, 13);
    // $diamonds = range(1, 13);
    // $hearts = range(1, 13);
    // $spades = range(1, 13);
    
    // shuffle($clubs);
    // shuffle($diamonds);
    // shuffle($hearts);
    // shuffle($spades);
    
    // $suits = array("clubs", "diamonds", "hearts", "spades");
    // $suit = rand(0,3);
    
    
    // //Code that doesn't actually do what it's intended to yet
    // //echo $suits[$suit];
    
    // echo ${$suits[$suit]}[rand(1,13)];
    // //echo $diamonds[5];
    // //Code that doesn't actually do what it's intended to yet
?>


<!DOCTYPE html>
<html>
    <?php
        include 'inc/functions.php';
    ?>
    
    <head>
        <title> Silverjack </title>
        
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    
    
    <body>
        
        <div id="main">
        <?php
            getHand();
        ?> <!--End of PHP code.-->
        
       
        </div>

    </body>
    
</html>