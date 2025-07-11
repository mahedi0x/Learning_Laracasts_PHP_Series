<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- array -->

    <?php

    // $colors = ["Red", "Green", "Blue", "Yellow", "Orange"];
    // for($i = 0; $i<count($colors); $i++){
    //     print_r("Index $i = $colors[$i] <br>");
    // }

    // foreach($colors as $singleColor){
    //     print_r($singleColor. "<br>");
    // }

    // foreach($colors as $index => $color){
    //     print_r("Index $index = $color <br>");

    // }












   

    $friendsName = ["abul", "babul", "mabul", "kabul"];

    

   

    
    ?>

    <ol>
        <?php 
        foreach ($friendsName as $friend) {
          echo "<h1> $friend </h1> <br>";
        
        }
        
        
        ?>
    </ol>

    
</body>

</html>