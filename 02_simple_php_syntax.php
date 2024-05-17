
<?php
// Variables
$name = "Kien Marl A. Trinidad";
$age = 22; 
$address = "BLK 1, Lot 7 Larlin Village Sampaloc Apalit Pampanga ";
$hobbies = "Watching amd Sleeping";
$pet_peeve = "Being kept waiting for a long time.";

// Output the value of the variables
echo $name, "\n";
echo $age, "\n";
echo $address, "\n";
echo $hobbies, "\n";
echo $pet_peeve, "\n";

//Single-line comment
$name = "Kien Marl A. Trinidad";
$age = 22; 
$address = "BLK 1, Lot 7 Larlin Village Sampaloc Apalit Pampanga ";
//$hobbies = "Watching amd Sleeping";
//$pet_peeve = "Being kept waiting for a long time.";

// Output the value of the variables
echo $name, "\n";
echo $age, "\n";
echo $address, "\n";
//echo $hobbies, "\n";
//echo $pet_peeve, "\n";

//Constants
define('NAME', 'Kien Marl A. Trinidad');
define('AGE', 22);
define('ADDRESS', 'BLK 1, Lot 7 Larlin Village Sampaloc Apalit Pampanga');
define('HOBBIES', 'Watching amd Sleeping');
define('PET_PEEVE', 'Being kept waiting for a long time.');

echo NAME, "\n";
echo AGE, "\n";
echo ADDRESS, "\n";
echo HOBBIES, "\n";
echo PET_PEEVE, "\n";

//var_dump
echo '<pre>';
var_dump(NAME, AGE, ADDRESS, HOBBIES, PET_PEEVE);
echo '</pre>';

//Multi-line comment
/*One of my pet peeves is being kept waiting for too long. Waiting too long not only wastes my time but may also cause me irritation and frustration. It affects my schedule and can throw off my usual plans. */


