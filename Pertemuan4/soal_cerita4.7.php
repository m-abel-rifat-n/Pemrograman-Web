<?php
$hargaProduk = 120000;
$diskon = 0.2; // 20%

if ($hargaProduk > 100000) {
    $hargaDiskon = $hargaProduk - ($hargaProduk * $diskon);
    echo "Harga yang harus dibayar setelah mendapatkan diskon 20% adalah: Rp " . number_format($hargaDiskon, 0, ",", ".");
} else {
    echo "Harga yang harus dibayar tanpa diskon adalah: Rp " . number_format($hargaProduk, 0, ",", ".");
}
?>
