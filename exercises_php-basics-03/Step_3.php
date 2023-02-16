<?php
$text="The quick brown Fox jumps over the lazy Dog the";
$words = explode(" ", $text); 
$now = count($words);
$j = 0;
for($i=0; $i<$now; $i++)
{
if ($words[$i] == "the" or $words[$i] == "The")
{
$j =  $j+1;
}
}
echo $j;
?>