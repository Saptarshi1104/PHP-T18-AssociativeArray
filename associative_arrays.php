<?php
echo "Welcome to Associative Arrays in PHP <br>";

// These are called Indexed Arrays
$arr = array('this', 'that', 'what');
echo $arr[0] . "<br>";
echo $arr[1] . "<br>";
echo $arr[2] . "<br>";

// Associative Arrays
$favCol = array(
    'person1' => 'red',
    'person2' => 'blue',
    'person3' => 'green',
    8 => 'this'
);

foreach ($favCol as $key => $value) {
    echo "Favourite color of $key is $value <br>";
}

echo $favCol['person1'] . "<br>";
echo $favCol['person2'] . "<br>";
echo $favCol['person3'] . "<br>";
echo $favCol[8] . "<br>";
?>