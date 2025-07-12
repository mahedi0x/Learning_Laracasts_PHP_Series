<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    // -------------------------Functions with Return Values----------------------
    function addNumbers($num1, $num2)
    {
        $sum = $num1 + $num2;
        return $sum;
    }
    $result = addNumbers(10, 5);
    echo $result;




    // -------------------------Default Parameter Values------------------------
    function welCome($name = "Guest", $greeting = "Hello")
    {
        echo "$greeting, $name!\n";
    }
    welCome("Alice");
    welCome();



    // -----------------------Variable Local Scope -------------------------
    function calculateArea($length, $width)
    {
        $area = $length * $width; // $area is local to this function
        echo "Inside function, area is: $area\n";
    }
    calculateArea(10, 5);



    // -----------------------Variable Global Scope -------------------------

    $message = "I am a global message.";

    function displayMessageParam($msg)
    {
        echo "Inside function (as parameter): " . $msg . "\n";
    }
    displayMessageParam($message);

    



    $cars = [
        [
            "brand" => "Toyota",
            "model" => "Camry",
            "year"  => 2022,
            "color" => "Blue"
        ],
        [
            "brand" => "Honda",
            "model" => "Civic",
            "year"  => 2021,
            "color" => "Red"
        ],
        [
            "brand" => "Tesla",
            "model" => "Model 3",
            "year"  => 2024,
            "color" => "Silver"
        ]
    ];


    function filterByCar($cars)
    {
        $brands = [];

        foreach ($cars as $car) {
            $brands[] = $car["brand"];
        }

        return $brands;
    }


    $res = filterByCar($cars);
    echo "<pre>";
    print_r($res);
    echo "</pre>";

    ?>

    <ul>
        <?php ?>



    </ul>
</body>

</html>