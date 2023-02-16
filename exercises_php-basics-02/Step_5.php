<?php
function WordToDigit($word){
    switch(strtolower($word)){
        case 'zero':
            return 0;
        case 'one':
            return 1;
        case 'five':
            return 5;
      
    }
}

$word = "one";
$digit = wordToDigit($word);
if ($digit != -1) {
    echo "The word '$word' corresponds to the digit $digit.";
} else {
    echo "Sorry, '$word' is not a recognized word.";
}

?>