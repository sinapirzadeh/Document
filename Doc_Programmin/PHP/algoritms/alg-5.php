<html lang="en">
<head>
    <title>alg-5</title>
</head>
<?php

if(isset($_POST['number']) && ($_POST['number'] % 2 == 0))
{
    echo $_POST['number'].' یک عدد زوج است ';
}


?>
<body>
    <form action="index.php" method="post">
        Enter the Number : <input type="text" name="number"><br>
        <input type="submit" value="send">
    </form>
</body>
</html>