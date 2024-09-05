<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 4</title>
</head>
<body>
    <h1>Soal 4</h1>

    <form>
        <label for="birthdate">Enter your birthdate:</label>
        <input type="date" id="birthdate" name="birthdate"><br><br>
        <input type="submit" value="Calculate Age">
    </form>

    <?php
        if (isset($_GET['birthdate'])) {
            $birthdate = $_GET['birthdate'];
            $today = date("Y-m-d");
            $age = date_diff(date_create($birthdate), date_create($today));
            echo "You are " . $age->y . " years, " . $age->m . " months, and " . $age->d . " days old.";
        }
    ?>
</body>
</html>