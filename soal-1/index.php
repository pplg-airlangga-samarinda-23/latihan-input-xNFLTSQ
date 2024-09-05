<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="post">
        <input type="number" name="jarijari"> <br>
        <input type="number" name="tinggi"> <br>
        <button type="submit">Hitung Volume</button>
        <button type="reset">Reset</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jarijari = $_POST["jarijari"]; // radius
    $tinggi = $_POST["tinggi"]; // height

    $volume = 3.14 * pow($jarijari, 2) * $tinggi; // calculate volume

    echo "Volume of the cylinder: " . number_format($volume, 2) . " cubic units";
}
?>
</body>
</html>