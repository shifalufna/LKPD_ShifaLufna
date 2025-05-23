<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas Berpasangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            color: #333;
        }
        h1, h2, h3 {
            color: #2c3e50;
            text-align: center;
        }
        hr {
            margin: 30px 0;
        }
        b {
            color: #2980b9;
        }
        .box {
            background-color: #ffffff;
            padding: 20px;
            margin: 0 auto;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div class="box">
<?php
date_default_timezone_set("Asia/Jakarta");

$nama1 = "Najiya Rizqi";
$nama2 = "Shifa Lufna Apriliyani";

echo "<h1>Aktivitas Berpasangan: Array dan Perulangan</h1>";
echo "<h3>Dibuat oleh: $nama1 dan $nama2</h3>";
echo "<hr>";

echo "<h2>Kasus 1: Tanggal dengan Array dan Looping</h2>";

$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = range(1, 31);
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = [2024, 2025, 2026];

echo "<b>Hari:</b> ";
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i] . ", ";
}

echo "<br><b>Tanggal:</b> ";
foreach ($tanggal as $tgl) {
    echo $tgl . ", ";
}

echo "<br><b>Bulan:</b> ";
$j = 0;
while ($j < count($bulan)) {
    echo $bulan[$j] . ", ";
    $j++;
}

echo "<br><b>Tahun:</b> ";
$k = 0;
do {
    echo $tahun[$k] . ", ";
    $k++;
} while ($k < count($tahun));

echo "<br><br><b>Contoh Tanggal:</b> " . $hari[1] . ", 10 - " . $bulan[2] . " - " . $tahun[1];
echo "<hr>";


echo "<h2>Kasus 2: Anak Ayam Turun 30</h2>";
for ($i = 30; $i > 0; $i--) {
    if ($i == 1) {
        echo "Anak ayam turun $i, mati satu tinggal induknya.<br>";
    } else {
        echo "Anak ayam turun $i, mati satu tinggal " . ($i - 1) . ".<br>";
    }
}
echo "<hr>";

echo "<h2>Kasus 3: Mawar Sholeh</h2>";

echo "<b>Mawar yang dimiliki Sholeh:</b> ";
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "$mawar, ";
}
echo "<br>Jumlah: " . (21 - 10 + 1) . " batang.";

echo "<br><b>Mawar yang diberikan ke ibunya:</b> ";
$count = 0;
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    echo "$mawar, ";
    $count++;
}
echo "<br>Jumlah: $count batang.";

echo "<br><b>Mawar yang diberikan ke Sholehah:</b> ";
$count2 = 0;
for ($mawar = 20; $mawar >= 10; $mawar -= 5) {
    echo "$mawar, ";
    $count2++;
}
echo "<br>Jumlah: $count2 batang.";

echo "<hr>";

echo "<h2>Kasus 4: Lagu Ambyar</h2>";

$emosi_lagu = [
    ["Suasana" => "Galau", "Lagu" => "Mesin Waktu - Budi Doremi"],
    ["Suasana" => "Bersemangat", "Lagu" => "Selamat Pagi - Ran"],
    ["Suasana" => "Marah", "Lagu" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];

foreach ($emosi_lagu as $lagu) {
    foreach ($lagu as $key => $value) {
        echo "<b>$key:</b> $value<br>";
    }
    echo "<br>";
}

echo "<hr>";
?>
</div>
</body>
</html>