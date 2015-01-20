<?php
if(isset($_GET['submit'])){
    $a=$_GET['marks'];


    if($a>=80 && $a<=100)
        echo "Grade: <b>A+</b>";
    elseif($a>=70 && $a<=79)
        echo "Grade: <b>A</b>";
    elseif ($a>=60 && $a<=69)
        echo "Grade: <b>A-</b>";
    elseif ($a>=50 && $a<=59)
        echo "Grade: <b>B</b>";
    elseif ($a>=40 && $a<=49)
        echo "Grade: <b>C</b>";
    elseif ($a>=33 && $a<=39)
        echo "Grade: <b>D</b>";
    else
        echo "Grade: <b>F</b>";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade</title>
</head>
<body>
<?php
$a="<br />";
echo "Question 9: Convert Marks to Grade: ".$a."where".$a."33 - 39 = D".$a."40 - 49 = C".$a."50 - 59 = B".$a."60 - 69 = A-".$a."70 - 79 = A".$a."80 - 100 = A+".$a;
?>
<form action="<?php $_PHP_SELF ?>" method="GET">
    <p>Marks: <input type="number" name="marks" title="Input only decimal number" required /></p>
    <p><input type="submit" value="Submit" name="submit" /></p>
</form>
</body>
</html>