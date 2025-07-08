<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style.css">
    <title>Laracasts PHP Series</title>

</head>

<body>

    <!-- <h2> -->

    <!--------------------Create Variable and It Print in HTML tag --------------------->
    <?php
    // $name = "Mahedi Hasan";
    // $university = "Metropolitan";
    // echo "Hello I'm  $name ";
    // echo "<br>";
    // echo "University : ". $university;
    ?>
    <!-- </h2> -->

    <!-- <h1>
        Hello <?php echo $name ?>.
    </h1> -->



    <!--------------------Conditional Statement  --------------------->
    <?php
    $name = "Mahedi";
    $readBook = true;

    if ($readBook == true) {
        $message = "Mahedi Read the Book ";
        // echo "$name Read the Book ";
    } else {
        $message = "He Don't Read the Book ";
    }
    ?>


    <h1>Hii!! <?php echo "$message" ?> </h1>
   <!-----------Shortcut ----------------------->
    <h1>
       Hii, <?= $message?> 
    </h1>


</body>

</html>