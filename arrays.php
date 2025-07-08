<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <h2>Array</h2>

    <p>
        Q. what is an array ?? <br>
        --->> An array is a variable that can store multiple values in one single variable. <br>

        Q. Types of Arrays in PHP : <br>
        1.Indexed Arrays <br>
        2.Associative Arrays <br>
        3.Multidimensional Arrays
    </p>

    <!--------------- Array Declare and get elements by index[]  ------------------------>
    <?php
    $ages = [25, 30, 22, 28];
    $fruits = ["Apple", "Banana", "Cherry"];
    $colors = ["Red", "Green", "Blue"];

    echo $ages[0];       // 25
    echo $fruits[1];     // Banana
    echo $colors[2];     // Blue

    // ----------------------------Print Full Array list -----------------------------------
    print_r($fruits);  
    // Output: Array ( [0] => Apple [1] => Grape [2] => Cherry)



    // <! ----------------- Adding elements to an Indexed Array -------------------------------->
    // You can add new elements to the end of an indexed array by using empty square brackets [].

    $friendsName = ["Mahedi", "Hasan"];
    $friendsName[] = "Bulbul";
    $friendsName[] = "Radwan";
    print_r($friendsName);
    // Output: Array ( [0] => Mahedi [1] => Hasan [2] => Bulbul [3] => Radwan )

    // Getting the length of an Indexed Array:
    print_r(count($friendsName));   


    ?>

</body>

</html>