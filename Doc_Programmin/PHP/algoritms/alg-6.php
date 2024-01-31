<html lang="en">
<head>
    <title>alg-5</title>
</head>
<?php

if(isset($_POST['first-name']) && strlen($_POST['first-name']) < 255 && strlen($_POST['first-name']) > 2){
    echo $_POST['first-name'];
}
elseif (isset($_POST['last-name']) && strlen($_POST['last-name']) < 255 && strlen($_POST['last-name']) > 2) {
    echo $_POST['last-name'];
}
elseif (isset($_POST['age']) && $_POST['age'] > 15 && $_POST['age'] < 30) {
    echo $_POST['age'];
}
elseif (isset($_POST['email'])) {
    echo $_POST['email'];

}
elseif (isset($_POST['passwrod']) && isset($_POST['re-passwrod']) && strlen($_POST['passwrod']) > 8 && $_POST['passwrod'] == $_POST['re-passwrod']) {
    echo $_POST['passwrod'];
}
else {
    echo 'inputs not write!';
}

?>
<body>
    <form action="index.php" method="post">
        Enter Your First Name : <input type="text" name="first-name"><br>
        Enter Your Last Name : <input type="text" name="last-name"><br>
        Enter Your Age : <input type="number" name="age"><br>
        Enter Your Email Address : <input type="email" name="email"><br>
        Enter a New Passwrod : <input type="password" name="passwrod"><br>
        Confirm Your Passwrod : <input type="password" name="re-passwrod"><br>
        <input type="submit" value="send">
    </form>
</body>
</html>