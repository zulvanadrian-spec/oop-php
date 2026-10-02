<?php

// 1. function dasar + return
function tambah( int $a, int $b): int {
    return $a + $b;
}

$angka1 = (int) readline("Masukan angka Pertama : ");
$angka2 = (int) readline("Masukan angka Kedua : ");

$hasil = tambah($angka1, $angka2);
echo "Hasil : $angka1 + $angka2 = $hasil\n";