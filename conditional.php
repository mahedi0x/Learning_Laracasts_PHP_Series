 <!--------------------Conditional Statement  --------------------->
 <?php
    $name = "Abul";
    $age = 14;
    $readBook = true;


    if ($age >= 18){
        echo "<h1>$name is Adult </h1>";
    }
    else {
        echo "<h2>$name is NOT Adult </h2>";
    }
    

    if ($readBook == true) {
        $message = "Mahedi Read the Book ";
    } else {
        $message = "He Don't Read the Book ";
    }


    ?>

    <h1>Hii!! <?php echo "$message" ?> </h1>

   <!-----------Shortcut ----------------------->
    <h1>I'm Using Shortcut, <?= $message?> </h1>