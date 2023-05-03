<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<form action="" method="POST">
  <label for="number">Sayı Girin:</label>
  <input type="number" id="number" name="number" required>
  <button type="submit">Kontrol Et</button>
</form>
<?php

function check_divisible_by_three() {
  if(isset($_POST['number'])) {
    $number = intval($_POST['number']);
    if($number == 0) {
      echo "Değer boş olamaz.";
    } else if($number % 3 == 0) {
      echo "Girdiğiniz sayı 3'e tam olarak bölünebilir.";
    } else {
      $next_divisible = ceil($number / 3) * 3;
      echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı $next_divisible'dır.";
    }
  }
}



?>
        
        <script src="" async defer></script>
    </body>
</html>
