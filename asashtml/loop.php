<?php

// //normal for
// for ($x=1000;$x > 0;$x-=100) {
//     echo "nilai $x <br>";
// }

//foreach
$kelas = [];
$kelas[] = ['nama' => 'Siti','umur' => 11];
$kelas[] = ['nama' => 'Alia','umur' => 12];

foreach($kelas as $index => $murid) {
    echo "Student $index: ";
    echo $murid['nama'].'<br>';
    echo $murid['umur'].'<br>';
    echo "------------------<br>";
}



?>