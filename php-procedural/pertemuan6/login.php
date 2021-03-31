<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <?php if (isset($_POST["submit"])) : ?>
    <h1>Selamat datang <?= $_POST["username"]; ?></h1>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="username">
          Username
          <input type="username" name="username" placeholder="Masukkan Usename" autofocus required>
        </label>
      </li>
      <li>
        <button type="submit" name="submit">Login</button>
      </li>
    </ul>
  </form>
</body>

</html>