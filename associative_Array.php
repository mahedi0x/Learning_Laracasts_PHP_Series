<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>


    <?php
    $car = [
        "brand" => "Toyota",
        "model" => "Camry",
        "year" => 2022,
        "color" => "Blue"
    ];
    $car['Price'] = '$100k';
    print_r($car);

    foreach ($car as $key => $value) {
        echo "$key = $value <br>";
    }


    $books = [

        [
            'name' => 'Do Androids Dream of Electric Sheep ',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com'
        ],

        [
            'name' => 'Project Hail Mary ',
            'author' => 'Mahedi Hasan',
            'purchaseUrl' => 'http://mahedi.com'
        ],

        [
            'name' => 'Like an Artist ',
            'author' => 'Maco Paris',
            'purchaseUrl' => 'http://maco.com'
        ],

    ];


    // print_r($books[1][2]);

    foreach ($books as $book) {
        echo "<h3> Book Name: " . $book["name"] . "<br>", "Author Name: " . $book["author"] . "<br>" . "URL: " . $book["purchaseUrl"] . "<br> </h3>";
    }

    // print_r($books);
    ?>

    <!-- 
    <ul>
        <?php foreach ($books as $book) : ?>

            <li><?= $book['name'] ?></li>
            <a href="#">
                <?= $book["author"]; ?>
            </a>

        <?php endforeach; ?>

    </ul>  -->



    <!-- ----------------Multidimensional Array--------------- -->
    <?php

    $students = [
        ["John Doe", 20, "Computer Science"],
        ["Jane Smith", 22, "Physics"],
        ["Mahedi", 24, "Software Engineering"],
    ];
    echo $students[0][2];

    foreach ($students as $student) {
        foreach ($student as $key => $value) {
            echo "Index = " . $key . " value =" . $value . "<br>";
        }
    }

    ?>

</body>

</html>