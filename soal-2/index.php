<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pilihan = $_POST["pilihan"];
        $nilai = $_POST["nilai"];
        
        switch ($pilihan) {
            case "KM ke M":
                $hasil = $nilai * 1000;
                echo "<p>$nilai kilometer = $hasil meter</p>";
                break;
            case "KM ke CM":
                $hasil = $nilai * 100000;
                echo "<p>$nilai kilometer = $hasil centimeter</p>";
                break;
            case "KM ke MM":
                $hasil = $nilai * 1000000;
                echo "<p>$nilai kilometer = $hasil milimeter</p>";
                break;
            default:
                echo "<p>Silakan pilih satuan konversi!</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 2</title>
</head>
<body>
    <h1>Soal 2</h1>
    <form method="post">
        <input type="number" name="nilai" placeholder="Masukkan nilai kilometer">
        <select name="pilihan">
            <option value="KM ke M">KM ke M</option>
            <option value="KM ke CM">KM ke CM</option>
            <option value="KM ke MM">KM ke MM</option>
        </select>
        <button type="submit">Konversi</button>
    </form>
</body>
</html>