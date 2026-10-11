<?php

// 1. if else, tampilkan genap atau ganjil
$angka = (int) readline("Masukan angka : ");
if ($angka %2 == 0){
    echo "angka Genap";
} elseif ($angka %2 != 0) {
    echo "angka Ganjil";
} else{
    echo "angka tidak boleh kurang dri 0";
}