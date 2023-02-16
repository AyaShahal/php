<?php
function isPrime($num){
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isPrime(3)) {
    echo "This is a prime number\n";
} else {
    echo "This is not a prime number\n";
}

?>