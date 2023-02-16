<!-- exercise 3 -->
<?php
$rows=5;
$i=1;
while($i<=$rows){
   $j=1;
   while($j<=$i){
echo"*";
$j++;

}
echo"\n <br>";
$i++;
}

$rows = 5;
$i = $rows; 

while ($i >= 1) {
    $j = 1;
    while ($j <= $i) {
        echo "*";
        $j++;
    }
    echo "\n <br>";
    $i--;
}
?>
