<html lang="en">
<head>
    <title>algoritms</title>
</head>
<?php 

$username = '';
$password = '';

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $passwrod = $_POST['password'];
}

echo $username.' '.$password;

?>

<body>

<form action="index.php" method="post">
    <input type="text" name="username"><br>
    <input type="password" name="password"><br>
    <button type="submit">Show Info</button>
</form>


</body>
</html>