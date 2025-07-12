<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <h2>Array</h2>
    <h3>

        Q. Types of Arrays in PHP : <br>

        1.Indexed Arrays
        2.Associative Arrays
        3.Multidimensional Arrays
    </h3>

    <!--------------- Array Declare and get elements by index[]  ------------------------>
    <?php
    $ages = [25, 30, 22, 28];
    $fruits = ["Apple", "Banana", "Cherry"];
    $colors = ["Red", "Green", "Blue"];
    echo $ages[0];       // 25
    echo $fruits[1];     // Banana



    // <! ----------------- Adding elements to an Indexed Array -------------------------------->

    $friendsName = ["Mahedi", "Hasan"];
    $friendsName[] = "Bulbul";
    $friendsName[] = "Radwan";
    print_r($friendsName);
    // Output: Array ( [0] => Mahedi [1] => Hasan [2] => Bulbul [3] => Radwan )

    print_r(count($friendsName));




    //------------------------ for/foreach loop (Good for when you need the index): ---------------------------
    $colors = ["Red", "Green", "Blue", "Yellow", "Orange"];
    for ($i = 0; $i < count($colors); $i++) {
        print_r("Index $i = $colors[$i] <br>");
    }


    foreach ($colors as $singleColor) {
        print_r($singleColor . "<br>");
    }


    foreach ($colors as $index => $color) {
        print_r("Index $index = $color <br>");
    }

    ?>



</body>

</html>