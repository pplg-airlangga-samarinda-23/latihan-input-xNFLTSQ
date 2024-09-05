<?php
  $pattern = '';
  if (isset($_POST['submit'])) {
    $n = $_POST['n'];
    for ($i = $n; $i > 0; $i--) {
      for ($j = 1; $j <= $n - $i; $j++) {
        $pattern .= '&nbsp;';
      }
      for ($k = 1; $k <= $i * 2 - 1; $k++) {
        $pattern .= '* ';
      }
      $pattern .= '<br>';
    }
  }
?>

<html>
<head>
  <title>Soal 6</title>
</head>
<body>
  <h1>soal 6
  </h1>
  <form method="post">
    <input type="number" name="n" placeholder="Enter a number">
    <br><br>
    <button type="submit" name="submit">Menghasilkan</button>
    <p><?php echo $pattern; ?></p>
  </form>
</body>
</html>