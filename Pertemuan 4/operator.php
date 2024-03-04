<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b; // Setelah operasi ini, nilai $a akan menjadi $a + $b
$a == $b; // Operasi perbandingan apakah $a sama dengan $b
$a *= $b; // Setelah operasi ini, nilai $a akan menjadi $a * $b
$a /= $b; // Setelah operasi ini, nilai $a akan menjadi $a / $b
$a %= $b; // Setelah operasi ini, nilai $a akan menjadi sisa bagi $a % $b

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Perhitungan</title>
</head>
<body>
    <h1>Hasil Perhitungan</h1>
    <p>Nilai a: <?php echo $a; ?></p>
    <p>Nilai b: <?php echo $b; ?></p>
    <ul>
        <li>Hasil Penjumlahan: <?php echo $hasilTambah; ?></li>
        <li>Hasil Pengurangan: <?php echo $hasilKurang; ?></li>
        <li>Hasil Perkalian: <?php echo $hasilKali; ?></li>
        <li>Hasil Pembagian: <?php echo $hasilBagi; ?></li>
        <li>Sisa Bagi: <?php echo $sisaBagi; ?></li>
        <li>Hasil Pangkat: <?php echo $pangkat; ?></li>
        <li>Apakah a sama dengan b: <?php echo $hasilSama ? 'Ya' : 'Tidak'; ?></li>
        <li>Apakah a tidak sama dengan b: <?php echo $hasilTidakSama ? 'Ya' : 'Tidak'; ?></li>
        <li>Apakah a lebih kecil dari b: <?php echo $hasilLebihKecil ? 'Ya' : 'Tidak'; ?></li>
        <li>Apakah a lebih besar dari b: <?php echo $hasilLebihBesar ? 'Ya' : 'Tidak'; ?></li>
        <li>Apakah a lebih kecil atau sama dengan b: <?php echo $hasilLebihKecilSama ? 'Ya' : 'Tidak'; ?></li>
        <li>Apakah a lebih besar atau sama dengan b: <?php echo $hasilLebihBesarSama ? 'Ya' : 'Tidak'; ?></li>
        <li>Hasil dari operasi logika AND: <?php echo $hasilAnd ? 'Ya' : 'Tidak'; ?></li>
        <li>Hasil dari operasi logika OR: <?php echo $hasilOr ? 'Ya' : 'Tidak'; ?></li>
        <li>Hasil dari operasi logika NOT pada a: <?php echo $hasilNotA ? 'Ya' : 'Tidak'; ?></li>
        <li>Hasil dari operasi logika NOT pada b: <?php echo $hasilNotB ? 'Ya' : 'Tidak'; ?></li>
        <li>Apakah a identik dengan b: <?php echo $hasilIdentik ? 'Ya' : 'Tidak'; ?></li>
        <li>Apakah a tidak identik dengan b: <?php echo $hasilTidakIdentik ? 'Ya' : 'Tidak'; ?></li>
    </ul>
</body>
</html>
