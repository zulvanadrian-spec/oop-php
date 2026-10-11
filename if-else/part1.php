<?php
// variabel & string interpolation
$nama = "Zulvan";
$umur = 20;
echo "Halo, nama gua $nama, umur $umur tahun.\n";

// concat pakai titik (.)
echo "Tahun depan umur gua " . ($umur + 1) . "\n";

// if / else
$nilai = 78;
if ($nilai >= 80) {
    echo "Grade A\n";
} elseif ($nilai >= 70) {
    echo "Grade B\n";
} else {
    echo "Grade C\n";
}

// for loop
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i\n";
}

// == vs ===
var_dump(5 == "5");   // true  (cuma bandingin nilai)
var_dump(5 === "5");  // false (nilai + tipe harus sama)
?>