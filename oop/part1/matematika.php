<?php

class Angka{

    public int $angkaPertama;
    public int $angkaKedua;
    public string $operator;

}

function tambah(int $angkaPertama, int $angkaKedua): int {
    return $angkaPertama + $angkaKedua;
}

function kali(int $angkaPertama, int $angkaKedua): int {
    return $angkaPertama * $angkaKedua;
}

$angka = new Angka();

$angka->angkaPertama = 12;
$angka->angkaKedua = 32;

//tambah()
$angka->operator = "+";
$hasil = tambah($angka->angkaPertama, $angka->angkaKedua);
echo "$angka->angkaPertama $angka->operator $angka->angkaKedua = $hasil<br>";

//kali()
$angka->operator = "x";
$hasil = kali($angka->angkaPertama, $angka->angkaKedua);
echo "$angka->angkaPertama $angka->operator $angka->angkaKedua = $hasil";