<?php 

//operatormatematik
// $x = 40;
// $y = $x % 4;
// $x %= 4;
// echo $y;
// echo $x;


//assignment
// $x = 15;
// echo $x++ .'<br>';
// echo $x .'<br>';
// echo ++$x .'<br>';
// echo $x .'<br>';


//perbandingan
$x = 10;
$y = '10';

if($x == $y) {
    echo "yes =="; //this will be yes becoz not compare data type
} else {
    echo "no ==";
}

if($x === $y) {
    echo "yes ==";
} else {
    echo "no =="; //this will be no becoz compare data type
}

$a = 0;
$b = false;

if($a == $b) {
    echo "yes =="; //this will be yes becoz not compare data type
} else {
    echo "no ==";
}

if($a === $b) {
    echo "yes ==";
} else {
    echo "no =="; //this will be no becoz compare data type
}


?>