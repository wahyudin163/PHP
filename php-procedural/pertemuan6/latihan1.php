<?php
$siswa = [
  [
    "nisn" => 123,
    "nama" => "wahyudin",
    "kelas" => "X",
    "jurusan" => "rpl"
  ],
  [
    "nisn" => 124,
    "nama" => "desy",
    "kelas" => "X",
    "jurusan" => "TAV"
  ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan GET</title>
</head>

<body>
  <h1>Daftar siswa</h1>
  <?php foreach ($siswa as $s) : ?>
    <ul>
      <li><?= $s['nisn']; ?></li>
      <li><?= $s['nama']; ?></li>
      <li><?= $s['kelas']; ?></li>
      <li><?= $s['jurusan']; ?></li>
    </ul>
  <?php endforeach ?>
</body>

</html>