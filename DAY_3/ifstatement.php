<?php 
$title = "If statement";
include 'includes/header.php'?>
    <body>
      <?php
        echo '<h2>If statement</h2>';
        $grad = 90;

        if($grad >= 50){
          echo '<h3 style="color: green">You Have Passed!</h3';
        }
        else{
          echo '<h3 style="color: Red">Failed, Sorry better luck next time.</h3>';
        }
        $grad = 'B';

        if($grad == 'A'){
          echo '</br><h2 style="color : yellow">You are a superstar:)</h2>';
        }
        elseif($grad == 'B'){
          echo '<h2> YOU DID WELL!</h2>';
        }
        else{
          echo '<h2>You have failed..:(</h2>';
        }

      ?>

<?php require 'includes/footer.php'?>
