<?php

function greaterFn($num){

  if($num > 30){
   return  "$num is greater than 30";
  }
  else if($num>21){
   return "$num is greater than 20";
  }
else if($num>10){
    return "$num is greater than 10";
}
else if($num<10){
   return "$num is less than 10";
}
}
echo greaterFn(40)."<br>";
echo greaterFn(21)."<br>"; 
echo greaterFn(12)."<br>";
echo greaterFn(8)."<br>";
?>