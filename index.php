<?php

//Declaring variale

$fname ="Mark";
$num = 23;
$check = true;


// printing
echo "Hello, I am " .$fname .", " .$num ."years old <br>";
echo $check;
echo "<hr>";


//conditional if statement
if($num>10){
    echo "number is greater than 10";
}
else if($num<10){
    echo "number is lessthan 10 ";
}
echo "<hr>";


//for loop
for($temp=1; $temp<=5; $temp++){
    echo $temp;
    echo "<br>";
}
echo "<hr>";

$temp = 5;


//while loop
while ($temp >= 1) {
    echo $temp;
    echo "<br>";
    $temp--;
}
echo "<hr>";


//array
$fruits = array("Mango", "Grapes", "Banana");

foreach($fruits as $fruit){
    echo $fruit .", ";
}
echo "<hr>";

// Create an associative array representing information about a person
$personInfo = array(
    "name" => "Mark",
    "age" => 23,
    "city" => "Tanza Cavite"
);

// Display the person's information
echo "Name: " . $personInfo["name"] . "<br>";
echo "Age: " . $personInfo["age"] . "<br>";
echo "City: " . $personInfo["city"] . "<br>";

echo "<hr>";

function addNumbers($num1, $num2){
    return $num1 + $num2;
}

$sum = addNumbers(1,1);
echo $sum;
echo "<hr>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container m-5 p-5 border shadow">
        <form method="POST" action="name.php">
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name:</label>
                <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter your name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>