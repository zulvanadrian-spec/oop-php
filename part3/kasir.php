<?php

function hitungBayar(int $lembar, int $harga): int{
    return $harga * $lembar;
}

function hitungDiskon( int $subtotal, int $lembar): int{
    if ($lembar > 100) {
        return intdiv ($subtotal, 5);
    } elseif ($lembar > 100) {
        return intdiv($subtotal, 10);
    } else {
        return 0;
    }
}

function cetakStruk(int $lembar, int $harga, int $subtotal, int $diskon, int $total): void {
    echo "==============================\n";
    echo "        STRUK FOTOKOPI        \n";
    echo "==============================\n";
    echo "Jumlah lembar : $lembar\n";
    echo "Harga/lembar  : Rp $harga\n";
    echo "------------------------------\n";
    echo "Subtotal      : Rp $subtotal\n";
    echo "Diskon        : Rp $diskon\n";
    echo "TOTAL         : Rp $total\n";
    echo "==============================\n";
    echo "      Terima kasih!           \n";
}

$lembar = (int) readline("Masukan lembar : ");
$harga = (int) readline("Masukan Harga : ");

$subtotal = hitungBayar($lembar, $harga);
$diskon = hitungDiskon($lembar, $subtotal);
$total = $subtotal - $diskon;

cetakStruk($lembar, $harga, $subtotal, $diskon, $total);