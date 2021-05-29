<?php 
$title = "ARRAYS";
include 'includes/header.php'?>
    <body>
      <h2><?php echo $title ?></h2>
      </br>
      <?php
      // for loop
      // a variable
         $num = 3;

         $numbers = array(11,33,4,5,56,6,10);
         echo $numbers[5];
         $size =count($numbers);

         echo "<p>array Number is size: $size </p>";

         for($i = 0; $i < $size; $i++){
           echo "<p>$numbers[$i]</p>";
         }

      ?>

<?php require 'includes/footer.php'?>