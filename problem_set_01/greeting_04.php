<?php
if(isset($_POST['submit'])){
    echo "Hi, ".$_POST['uname']." good day.";
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
echo "<b>Question 4: Take user name as input and show a greeting like: Hi, &lt;user name&gt; good day.</b><br />";
echo "<b>Input User Name: </b>";
?>
<form action="<?php $_PHP_SELF ?>" method="post">
    <p>User Name: <input type="text" name="uname" required /></p>
    <p><input type="submit" value="Submit" name="submit" /></p>
</form>
</body>
</html>