<?php
if(isset($_POST['submit'])){
    $a=$_POST['number1'];
    $b=$_POST['number2'];
    $c="<br />";
    echo "<b>Output: </b>".$c;
    echo $a." + ".$b." = ".($a+$b).$c;
    echo $a." - ".$b." = ".($a-$b).$c;
    echo $a." * ".$b." = ".($a*$b).$c;
    echo $a." / ".$b." = ".($a/$b).$c;
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
echo "<b> Question 2: Take two numbers and show their addition, subtraction, division and multiplication.</b> <br />";
echo "<b>Input Two Numbers: </b>";
?>
<form action="<?php $_PHP_SELF ?>" method="POST">
    <p>Number1: <input type="number" name="number1" title="Input only decimal number" required /></p>
    <p>Number2: <input type="number" name="number2" title="Input only decimal number" required /></p>
    <p><input type="submit" value="Submit" name="submit" /></p>
</form>
</body>
</html>