<?php
// Request Method 'POST dan GET'
// Superglobals
// superglobal adalah variabel yang dimiliki php 'Varibel Spesial'
// yang perlu dipelajari
// Variable Scope - Lingkup dari sebuah varible di dalam php

// Variabel lokal
// $x = 10;
// echo $x;

// function tampil()
// {
// $x = 20;
// echo $x;
// }

// tampil();
// maka akan tampil yang di dalam fungsi

// varible globals
// $x = 10;
// function tampil()
// {
//  ! global $x;
//   echo $x;
// }
// tampil();
// maka yg akan tampil 10 karena adanya variabel globals

// Variabel SuperGlobals
// variabel yang sdh dimiliki oleh php dan bisa digunakan dimanapun kapanpun didalam php kita
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// semua variabel diatas adalah array asssociative
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SERVER);
// echo $_SERVER['SERVER_NAME'];

// Sekarang kita langsung belajar S_GET
$_GET["nama"] = "wahyudin";
$_GET["NISN"] = 1234;
var_dump($_GET);
