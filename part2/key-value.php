<?php

// (key => value)
echo "\n===key-Value===\n";
$user = [
    "nama" => "Zulvan",
    "umur" => 19
];

print_r($user);

// accsess data
echo "\n1.akses data\n";
echo "nama -->" . $user["nama"] . "\n";
echo "umur -->" . $user["umur"] . "\n";

// + new key
echo "\n2.Tambah key Baru\n";
echo "+ Kota = 'Karawang'\n";
$user["Kota"] = "Karawang";
print_r($user);