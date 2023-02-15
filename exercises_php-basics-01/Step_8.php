<?php
$items = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");

echo "Hello sir do you have {$items[0]}, {$items[1]}, {$items[2]}, {$items[3]}? Also if you sell fruits can I find a {$items[count($items)-1]}?<br>";

$items = array(
    "eggs" => array("balade", "mazere3"),
    "milk" => array("Fresh", "Taanayel"),
    "water-pack" => array("Tanoureen", "Reem")
);
echo "Hey Sir, Please I need 1 pack of {$items['eggs'][0]} eggs and 3 {$items['water-pack'][1]} Water Pack.";
?>



