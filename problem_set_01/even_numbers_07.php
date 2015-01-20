<?php
echo "<b>Question 7: Show all even number from 1 to 100.</b><br />";
echo "<br /><b>All even numbers from 1 to 100 are: </b><br />";
for($i=1;$i<=100;$i++){
    if($i%2==0)
        echo "<br />".$i;
}
/*for($i=2;$i<=100;$i+=2)
    echo "<br />".$i;*/
?>