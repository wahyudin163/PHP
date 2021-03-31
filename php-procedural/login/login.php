<?php
if (isset($_POST["submit"])) {
  if (S_POST["username"] == "admin" && $_POST["password"] == "123") {
    header("location : admin.php");
    exit;
  } else {
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
</head>

<body>
  <h1>Silahkan Login</h1>
  <?php if(isset[$]) ?>
  <p>Username dan password salah!</p>

  <ul>
    <form action="" method="POST">
      <li>
        <label>
          Username
          <input type="username" name="username">
        </label>
      </li>
      <li>
        <label>
          Password
          <input type="password" name="password">
        </label>
      </li>
      <li>
        <button type="submit" name="submit">Login</button>
      </li>
    </form>
  </ul>
</body>

</html>