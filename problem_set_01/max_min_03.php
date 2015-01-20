<?php
if(isset($_POST['submit'])){
    $a=(int)$_POST['number1'];
    $b=(int)$_POST['number2'];
    $c="<br />";
    echo "<b>Output: </b>".$c;

    if($a>$b)
        echo $a." is bigger than ".$b.$c;
    elseif ($a<$b)
        echo $a." is smaller than ".$b.$c;
    else
        echo $a." is equal to ".$b;
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Test </title>
</head>
<body>
<?php
echo "<b>Question 3: Take two numbers and tell which one is bigger and which one is small. If they are equal tell that they are equal.</b><br />";
echo "<b>Input Two Numbers: </b>";
?>
<form action="output3.php" method="post">
    <p>Number1: <input type="number" name="number1" title="Input only decimal number" required /></p>
    <p>Number2: <input type="number" name="number2" title="Input only decimal number" required /></p>
    <p><input type="submit" value="Submit" name="submit" /></p>
</form>
</body>
</html>