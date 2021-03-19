<?php
// pertemuan 1 
// Sintak dasar PHP
// komentar

// Standar Output
// echo, print (mencetak tulisan, isi variabel dll)
// print_r (khusus untuk mencetak isi string array)
//  var_dump (untuk melihat isi variabel)

// contoh echo tulisan
// echo "Wahyudin";
// contoh echo angka
// echo 123;
// contoh echo bolean
// echo true;
// echo false;
// contoh echo string, kalo string harus pakai kutip 2 kalau 1 nanti error
// echo "jum'at";


// contoh cetak string memakai print_r
// print_r("Wahyudin");

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- cara 1 -->
  <h1>Selamat datang <?php echo "Wahyudin"; ?></h1>
  <p><?php echo "ini adalah paragraf" ?></p>
  <!-- cara 2 tidak disarankan-->
  <?php
  echo "<h1>Halo selamat datang</h1";
  ?>
</body>

</html>

<!-- operator -->
<!-- aritmatika -->
<!-- + - * / % -->
<!-- contoh -->
<?php
echo 1 + 1;
?>

<!-- Penggabung string / concatenation / concat -->
<!-- . -->
<!-- contoh -->
<?php
$nama_depan = "siti";
$nama_belakang = "fatimah";
echo $nama_depan . " " . $nama_belakang;
?>

<!-- Assignment / penugasan-->
<!-- =, +=, *=, /=, %=, .= -->
<!-- contoh -->
<?php
$x = 1;
$x -= 5;
echo $x;
?>