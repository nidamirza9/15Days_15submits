<?php
//method 1
$a[0] = 10;
$a['c'] = "computer";
$a['php'] = "web deevelopment";
$a[10] = "ten";

//method 2

$a = array(
  0 => 10,
  "N" => "Nida",
  "php" => "web development",
  10 => "ten",
  50 => 50.50
);

// print Value
echo '<p style="color: green">N for </b>'.$a['N'];
echo '<hr style="border-top:3px dotted #800980;">';

foreach ($a as $key => $values){
  echo "<br/><p style='background-color: pink'>Key is <b style='color: green'>$key</b> value is <b style='background-color: yellow'>$values</b>";

}

?>