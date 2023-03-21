<?php

function tambah($a,$b) {
    return $a+$b;
}

function baki($a,$b) {
    if ($a%$b > 0) {
        return "Ada baki ye";
    } else {
        return "Tiada baki";
    }
}

//echo tambah(3,4).'<br>';

//echo baki(50,4).'<br>';

function pre_name($pegawai) {
    $pname = ' ';

    if ($pegawai=='Firdaus') {
        $pname = 'Dr. ';
    } elseif ($pegawai == 'Izzati') {
        $pname = 'Prof. ';
    } else {
        $pname = 'Mr. ';
    }

    return $pname.$pegawai;
}

//echo pre_name('Izzati');

?>