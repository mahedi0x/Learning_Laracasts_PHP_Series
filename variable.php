
<!---------------------Variable-------------------------->
<?php 
$name = "Mahedi Hasan"; 
$age = 24;
$height = 6.1;
$isStudent = true;


echo "Name = $name <br>";
echo "Age = $age <br>";

print_r($height);
print_r($isStudent);
print_r($name. $age .$height .$isStudent."<br>");

var_dump($name, $age, $height, $isStudent, $isValue);

?>


<h1>My Name is <?= $name?></h1>
<h1>My Age is <?= $age?></h1>
<h1>My Height is <?= $height?></h1>
<h1>Is I'm Student <?= $isStudent?></h1>