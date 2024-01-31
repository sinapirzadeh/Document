<html lang="en">
<head>
    <title>alg-2</title>
</head>
<?php

$persons = [
    ['id' => 1, 'name' => 'sina', 'last-name' => 'pirzadeh', 'age' => 19]
];

// Add info to 'persons' array
array_push($persons, "['id' => 2, 'name' => 'amir', 'last-name' => 'pirzadeh', 'age' => 27]");
array_push($persons, "['id' => 2, 'name' => 'mahdi', 'last-name' => 'alizadeh', 'age' => 16]");

// Delete info in 'persons' array
array_pop($persons);
array_shift($persons);

echo count($persons);

foreach ($persons as $key => $value) {
    echo $value.'<br>';
}

?>
<body>
    
</body>
</html>