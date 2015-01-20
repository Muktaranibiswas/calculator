<?php
if(isset($_POST['submit'])){
    $a=(int)$_POST['lower'];
    $b=(int)$_POST['upper'];
    $c="<br />";

    echo $a." to ".$b." all integers are: ".$c;
    for($i=$a;$i<=$b;$i++)
        echo "<br />".$i;
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<?php
echo "<b>Question 6: Take upper and lower limit from user and show all integers between them (including them).</b><br />";
?>
<form action="<?php $_PHP_SELF ?>" method="post">
    <p>Lower Limit: <input type="number" name="lower" title="Input only decimal number" required /></p>
    <p>Upper Limit: <input type="number" name="upper" title="Input only decimal number" required /></p>
    <p><input type="submit" value="Submit" name="submit" /></p>
</form>
</body>
</html>