<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .calculator {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .result {
            width: 100%;
            height: 50px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
            background-color: #f9f9f9;
        }
        .operation {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #00000;
            color: white;
            font-size: 16px;
            margin: 0 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="calculator">
    <form method="post">
        <input type="number" name="angka1" placeholder="Angka 1" required>
        <input type="number" name="angka2" placeholder="Angka 2" required>

        <div class="operation">
            <button type="submit" name="operation" value="tambah">+</button>
            <button type="submit" name="operation" value="kurang">-</button>
            <button type="submit" name="operation" value="kali">*</button>
            <button type="submit" name="operation" value="bagi">/</button>
        </div>

        <div class="result">
            Hasil: <?php 
                if (isset($_POST['operation'])) {
                    $angka1 = $_POST['angka1'];
                    $angka2 = $_POST['angka2'];
                    switch ($_POST['operation']) {
                        case 'tambah':
                            echo $angka1 + $angka2;
                            break;
                        case 'kurang':
                            echo $angka1 - $angka2;
                            break;
                        case 'kali':
                            echo $angka1 * $angka2;
                            break;
                        case 'bagi':
                            echo $angka2 != 0 ? $angka1 / $angka2 : 'Tidak dapat dibagi 0';
                            break;
                    }
                }
            ?>
        </div>
    </form>
</div>

</body>
</html>