
<?php

function calculateArea($height, $width){
    $result = $height * $width;
    return $result;
}

$area = calculateArea(5, 3);
echo "Result: " . $area;

?>
