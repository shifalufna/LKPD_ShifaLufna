<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Waktu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            background-color:rgb(245, 157, 232);
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        p {
            margin-top: 20px;
            font-size: 18px;
            color: #2c3e50;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Menentukan waktu</h1>
    <form method="post">
        <label for="jam">Masukkan Jam (HH:MM)</label>
        <input type="text" id="jam" name="jam" required>
        <button type="submit">Cek waktu</button>
    </form>    

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST['jam'];

        if ($jam >= "00:00" && $jam < "04:00") {
            echo "<p>$jam = Dini hari</p>";
        } elseif ($jam >= "04:00" && $jam < "10:00") {
            echo "<p>$jam = Pagi</p>";
        } elseif ($jam >= "10:00" && $jam < "15:00") {
            echo "<p>$jam = Siang</p>";
        } elseif ($jam >= "15:00" && $jam < "17:30") {
            echo "<p>$jam = Sore</p>";
        } elseif ($jam >= "17:30" && $jam < "18:30") {
            echo "<p>$jam = Petang</p>";
        } elseif ($jam >= "18:30" && $jam < "24:00") {
            echo "<p>$jam = Malam</p>";
        } else {
            echo "<p>Dunia lain</p>";
        }
    }
    ?>

</body>
</html>