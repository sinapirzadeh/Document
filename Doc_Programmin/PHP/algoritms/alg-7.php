<html lang="en">
<head>
    <title>alg-7</title>
</head>
<?php



$colors = [
    black => '#000000', 
    white =>  '#ffffff', 
    red =>  '#ff0000', 
    green => '#00ff00', 
    blue => '#0000ff' 
];


foreach ($colors as $key => $color){
    if (isset($_POST['color']) && $_POST['color'] == $key) {
        echo 'Your Color Code is ['.$color.']';
        break;
    }

}



?>
<body>
    
    <form action="index.php" method="post">
        Enter Your Color Name : <input type="text" name="color"><br>
        <input type="submit" value="send">
    </form>

</body>
</html>