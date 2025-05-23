<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 40px;
            max-width: 500px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background:rgb(235, 149, 199);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background: #2980b9;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: #2c3e50;
        }
    </style>
</head>

<body>
    <h1>Daftar Nilai</h1>
    <form method="post">
        <label for="nilai">Masukkan nilai</label>
        <input type="number" id="nilai" name="nilai" required>
        <button type="submit">Cek nilai</button>
    </form>    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];

        echo "<p>";
        if ($nilai >= 90 && $nilai <= 100) {
            echo "Nilai $nilai = A";
        } elseif ($nilai >= 80 && $nilai <= 89) {
            echo "Nilai $nilai = B";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            echo "Nilai $nilai = C";
        } elseif ($nilai >= 0 && $nilai <= 69) {
            echo "Nilai $nilai = D";
        } else {
            echo "Nilai wajib di antara 0 - 100";
        }
        echo "</p>";
    } 
    ?>
</body>
</html>