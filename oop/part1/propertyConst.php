<?php

class Hewan {

    public string $nama;
    public string $jenis;
    public string $makanan;
    
    public const MATA = 2;
}

$hewan = new Hewan();

$hewan -> nama = "Harimau";
$hewan -> jenis = "Mamalia";
$hewan -> makanan = "Karnivora";


echo "Hewan : $hewan->nama <br>";
echo "Jenis : $hewan->jenis <br>";
echo "$hewan->nama adalah hewan : $hewan->makanan";