<?php 
$title = "Functions";
include 'includes/header.php'?>
    <body>
      <h2 style="color: #123451">Functions</h2>
      </br>
      <?php
      // Defining a Function
      
      function writeMessage(){
        echo '<h3 style="background-color: green ">You are really  a nice person, Have a nice time!</br></h3>';
      }
      // Calling a function
      writeMessage();

      echo '<hr/>';
      writeMessage();

      function addFunction($num1,$num2){
        $num = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $num";
      }

      function changeNum(&$num){
        $num = $num + 10;
        // $num+= 10;
      }

      function returnProduct($num1,$num2){
        $prod = $num1 + $num2;
        return $prod;
      }


      $num = 599;
      addFunction(10,30);
      echo "</br>";
      addFunction(30,$num);
      echo "</br>";
      addFunction('10','90');

      echo "<hr/>";
      changeNum($num);
      echo $num. '</br>';

      echo "<hr/>";
      $return_value = returnProduct(100,20);
      echo $return_value . '<br/>';


        

      ?>

<?php require 'includes/footer.php'?>