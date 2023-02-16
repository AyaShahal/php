
<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $n = strlen($number);
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += $digit ** $n;
        $temp = (int) ($temp / 10);
    }
    return $number === $sum;
}

$number = 153;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>