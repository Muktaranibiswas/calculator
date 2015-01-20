<?php
echo "<b>Question 8: Show first 100 Fibonacci number.</b><br />";
echo "<b>First 100 Fibonacci number are: </b><br />";
$a=0;
$b=1;
$c=0;
$i=1;
echo $a." : ".$a."<br />";
while ($i<=100) {
    $a=$b;
    $b=$c;
    $c=$a+$b;
    echo $i." : ".$c."<br />";
    $i++;
}
?>