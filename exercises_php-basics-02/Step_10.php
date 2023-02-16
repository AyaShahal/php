<?php
$string="php";
function check_palindrome($string){
    if($string==strrev($string)){
        echo $string . " is a palindrome";
    } else {
        echo $string . " is not a palindrome";
    }
   
}
check_palindrome($string);
?>