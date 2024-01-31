<html lang="en">
<head>
    <title>alg-3</title>
</head>
<?php

if(isset($_POST['number1']) && isset($_POST['number2']))
{
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    echo  $num1.' + '.$num2.' = '.($num1+$num2).'<br>';
    echo  $num1.' - '.$num2.' = '.($num1-$num2).'<br>';
    echo  $num1.' * '.$num2.' = '.($num1*$num2).'<br>';
    echo  $num1.' / '.$num2.' = '.($num1/$num2).'<br>';
}
?>
<body>
    <form action="index.php" method="post">
        Enter the Number 1 : <input type="text" name="number1"><br>
        Enter the Number 2 : <input type="text" name="number2"><br>
        <input type="submit" value="send">
    </form>
</body>
</html>