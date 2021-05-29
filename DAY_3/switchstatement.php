<?php
$title = "SwitchStatement";
include 'includes/header.php'?>
    <body>
      <h2>Switch Statement</h2>
      <?php
      $grade = 'A';
      // $grade = 'B';
      // $grade = 'C';
      switch($grade){
        case 'A':
          echo '<h3 style="color: green">You are Winner;)</h3>';
          break;
        case 'B':
          echo '<h3 style="color: blue">You Have Passed!</h3>';
          break;
        default:
        echo '<h3 style="color: Red">Failed, Sorry better luck next time.</h3>'; 
      }
      ?>
<?php require 'includes/footer.php'?>