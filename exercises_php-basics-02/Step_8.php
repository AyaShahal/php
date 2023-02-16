<?php
$number = 4;
if (substr_count(decbin($number), '1') === 1) {
    echo $number . " is a power of 2.";
} else {
    echo $number . " is not a power of 2.";
}
?>
