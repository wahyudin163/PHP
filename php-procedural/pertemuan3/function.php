<!-- User Defined Function -->
<!-- membuat fungsi sendiri -->
<?php
function salam($waktu, $nama)
{
  return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan function/fungsi</title>
</head>

<body>
  <!-- wahyudin akan dikirimkan ke Parameter $nama   -->
  <h1><?= salam("Pagi", "wahyudin"); ?></h1>
</body>

</html>