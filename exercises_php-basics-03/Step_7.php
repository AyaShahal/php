<!-- exercise 5 -->
<?php
$sentence = "Hello, world!";
$reversed = "";

for ($i = strlen($sentence) - 1; $i >= 0; $i--) {
    $reversed .= $sentence[$i];
}

echo $reversed; // Output: !dlrow ,olleH
?>
