<?php
$skor = 600; // Ganti nilai skor sesuai dengan skor pemain

$totalSkor = "Total skor pemain adalah: $skor <br>";
$hadiahTambahan = $skor > 500 ? "YA" : "TIDAK";
$pesanHadiah = "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";

echo $totalSkor . $pesanHadiah;
?>
