<html lang="en">
<head>
    <title>alg-4</title>
</head>
<?php

if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['number3']))
{
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $num3 = $_POST['number3'];
}

$sum = $num1 + $num2 + $num3;
echo $sum / 3;

?>
<body>
    <form action="index.php" method="post">
        Enter the Number 1 : <input type="text" name="number1"><br>
        Enter the Number 2 : <input type="text" name="number2"><br>
        Enter the Number 3 : <input type="text" name="number3"><br>
        <input type="submit" value="send">
    </form>
</body>
</html>