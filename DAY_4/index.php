<?php 
$title = "Index";
include 'includes/header.php'?>
  <h1>PHP Primer - Index</h1>
  <br/>

<?php 
 echo "Hello Nida  ";
 echo '</br>';
 echo 300+20;
?>

<?php 
 $name = 'Nida Mirza';
 echo $name;
 echo '</br>';
 echo '<h2>My Name is: '.$name.'</h2>';
?>

<button type="button" class="btn btn-info">Click Me</button>
<button type="button" class="btn btn-dark">PHP</button>

<button type="button" class="btn btn-success">Follow us</button>
<?php require 'includes/footer.php' ?>