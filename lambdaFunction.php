<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $sayHello = function () {
        echo "Hello from an anonymous function! <br>";
    };
    $sayHello();


    $greetPerson = function ($name) {
        echo "Hello, " . $name . "!\n";
    };
    $greetPerson("Alice");



    $numbers = [1, 2, 3, 4, 5];
    $doubledNumbers = array_map(function ($n) {
        return $n * 2;
    }, $numbers);


    print_r($numbers);
    print_r($doubledNumbers);

    ?>

</body>

</html>