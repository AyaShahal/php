<?php
$num = 4;

$factorial = 1;

$i = 1;

while ($i <= $num) {
    $factorial *= $i;
    $i++;
}

echo "The factorial of $num is $factorial";
?>
