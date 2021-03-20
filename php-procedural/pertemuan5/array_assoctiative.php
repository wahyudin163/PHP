<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Array associative</title>
  <style>
  .kotak{
    width:30px;
    height:30px;
    background-color:#BADA55;
    text-align:center;
    line-height:30px;
    margin:3px;
    float:left;
    transition:0.30s;
  }
  .kotak:hover{
    transform:rotate(360deg);
    border-radius:50%;
  }
  </style>
</head>
<body>
<?php 
$angka=[1,2,3,4,5,6];
?>

<?php foreach($angka as $a): ?>
  <div class="kotak"><?= $a; ?></div>
  <?php endforeach ?>
</body>
</html>