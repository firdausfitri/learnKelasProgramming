<?php
$nama = isset($_GET['nama']) ? $_GET['nama'] : ' ';

if ($nama == 'alia') {
    echo "Yes, this is Alia";
} elseif ($nama == 'abu') {
    echo "Yes, this is Abu";
} else {
    echo "I dont recognize you";
}

switch ($nama) {
    case 'alias':
        echo "Hello Alias from switch case";
        break;
    case 'mamat':
        echo "Hello mamat from switch case";
        break;
    default:
    echo "Nothing from switch";
}
