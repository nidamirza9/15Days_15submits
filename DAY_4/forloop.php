<?php 
$title = "For Loop";
include 'includes/header.php'?>
    <body>
      <h2>For Loop Concept</h2>
      </br>
      <?php
      // for loop
         for($count = 0; $count < 10; $count++){
           echo '<p style="color: green">Welcome to php world</p>';
         }
      ?>

<?php require 'includes/footer.php'?>