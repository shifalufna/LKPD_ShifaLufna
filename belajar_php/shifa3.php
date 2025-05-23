<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Harian Andi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f4f4f4, #e0e0e0);
            color: #333;
            margin: 0;
            padding: 30px;
        }

        h1, h2, h3 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        h1, h2, h3, p {
            text-align: center;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: #ffffff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px 16px;
            text-align: left;
        }

        th {
            background-color:rgb(248, 143, 214);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        p {
            font-size: 18px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

<?php
date_default_timezone_set("Asia/Jakarta"); 

$nama1 = "Najiya Rizqi";
$nama2 = "Shifa Lufna Apriliyani";

$tiba_rumah = "15:45";
$mandi = "15:45 - 16:00";
$mengaji = "16:00 - 16:30";
$tugas_sekolah = "16:30 - 18:30";
$menghafal = "18:30 - 19:00";
$membeli_bumbu = "Sebelum makan malam";
$sholat_maghrib = "18:00";
$makan_malam = "Setelah sholat maghrib, sebelum isya";
$sholat_isya = "19:15";
$chatting_start = "17:00";
$chatting_duration = 30; 
$tidur = "22:00";
$bangun = "04:00";
$chatting_time_raya = date("H:i", strtotime("+4 hours", strtotime($chatting_start)));
$tugas_ada = true; 

if ($tugas_ada) {
    $waktu_luang = 22 - 18.5 - 0.5;
} else {
    $waktu_luang = 22 - 16; 
}
?>

<h1>Jadwal Harian Andi</h1>
<h3>Dibuat oleh: <?php echo $nama1 . " dan " . $nama2; ?></h3>

<table>
    <tr>
        <th>Waktu</th>
        <th>Kegiatan</th>
    </tr>
    <tr>
        <td><?php echo $tiba_rumah; ?></td>
        <td>Andi tiba di rumah</td>
    </tr>
    <tr>
        <td><?php echo $mandi; ?></td>
        <td>Andi mandi</td>
    </tr>
    <tr>
        <td><?php echo $mengaji; ?></td>
        <td>Andi mengaji</td>
    </tr>
    <?php if ($tugas_ada) { ?>
    <tr>
        <td><?php echo $tugas_sekolah; ?></td>
        <td>Andi mengerjakan tugas sekolah</td>
    </tr>
    <?php } ?>
    <tr>
        <td><?php echo $menghafal; ?></td>
        <td>Andi menghafal dialog festival</td>
    </tr>
    <tr>
        <td><?php echo $sholat_maghrib; ?></td>
        <td>Sholat Maghrib</td>
    </tr>
    <tr>
        <td><?php echo $membeli_bumbu; ?></td>
        <td>Andi membeli bumbu masakan</td>
    </tr>
    <tr>
        <td><?php echo $makan_malam; ?></td>
        <td>Makan malam bersama keluarga</td>
    </tr>
    <tr>
        <td><?php echo $sholat_isya; ?></td>
        <td>Sholat Isya</td>
    </tr>
    <tr>
        <td><?php echo $chatting_start . " - " . date("H:i", strtotime("+30 minutes", strtotime($chatting_start))); ?></td>
        <td>Chatting dengan Raya (di Arab jam <?php echo $chatting_time_raya; ?>)</td>
    </tr>
    <tr>
        <td>21:30 - 22:00</td>
        <td>Mengobrol bersama keluarga</td>
    </tr>
    <tr>
        <td><?php echo $tidur; ?></td>
        <td>Andi tidur</td>
    </tr>
</table>

<h2>Waktu Luang</h2>
<p><?php echo ($tugas_ada) ? "Waktu luang Andi: " . round($waktu_luang, 1) . " jam" : "Tanpa tugas, Andi punya waktu luang: " . round($waktu_luang, 1) . " jam"; ?></p>

</body>
</html>