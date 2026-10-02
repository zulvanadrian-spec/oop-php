<?php

$buah = ["Apel","Anggur","Jeruk"];
echo "===ARRAY==\n";

// array indexing
echo "1.indexing\n";
echo "Index  0--> $buah[0]\n";
echo "Index  1--> $buah[1]\n";
echo "Index  2--> $buah[2]\n";

// + push data
echo "\n2.push data\n";
$buah[] = "Mangga";
echo "Push 'Mangga':\n";
print_r($buah);

// hitung isi data
$jmlhData = count($buah);
echo "\n3.Hitung isi Data\n";
echo "jumlah data --> $jmlhData\n";
