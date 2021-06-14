<?php
$a[0] = 10;
$a[1] = 20;
$a[2] = 30;
$a[0] = "C";
$a[0] = "4";

// Method 2 // Index Dynamic Array

// $a[] = 10;
// $a[] = 20;
// $a[] = 30;
// $a[] = "C";
// $a[] = "4";

//Method 3
//Array

$a = array(10,20,30,"C","C++");
$b = array(90,50,69,78,9);

echo '<pre>';

echo $a[3];

for($i=0; $i< count($a); $i++){
  echo "<br>".$a[$i];
}

echo '<pre>';

echo '<hr style="border-top:3px dotted #800980;">';
echo '<pre>';
$sum = array_sum($a);
echo $sum;
echo '<hr style="border-top:3px solid #212122;">';
echo '<pre>';
print_r($a);
echo '<hr style="border-top:3px dotted #800980;">';
echo '<pre>';
var_dump($a);
echo sort($a);
echo '<hr style="border-top:3px dotted #800980;">';
echo count($a);
echo array_product($a);
echo '<hr style="border-top:3px dotted #800980;">';
$merge = array_merge($a,$b);
print_r($merge);
$check = array_search('10', $a);
echo $check;
echo '<hr style="border-top:3px dotted #800980;">';
$year = range(2000,2020);
echo "<select>";
foreach ($year as $value) 
{
echo 
"<option>$value</option>";
}
echo "</select>";




?>