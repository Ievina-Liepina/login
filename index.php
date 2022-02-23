<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pets</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/466df6fb59.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="img/blue-bunny.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
<nav>
  <div class="header">
      <div class="inner_header">
          <div class="logo_cont">
              <h3>P<span>ETS</span></h3>
          </div>
    <ul class="navigation">
        <li><a href="index.php">HOME</a></li>
        <li><a href="#">PETS</a></li>
        <li><a href="#">SHOP</a></li>
    </ul>
        <ul class="login">
            <?php
                if(isset($_SESSION['userid'])): ?>
            <li><a href="#"><?= $_SESSION['useruid']; ?></a> </li>
            <li><a class="button1" href="includes/logout.inc.php">LOGOUT</a> </li>
            <?php else: ?>
            <li><a href="#">SIGN UP</a></li>
            <li><a class="button1" href="#">LOGIN</a></li>
            <?php endif; ?>
        </ul>
      </div>
  </div>
</nav>
<section>
    <div class="signup">
        <h4 style="font-family: Roboto Mono,sans-serif">SIGN UP</h4>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat password">
            <input type="text" name="email" placeholder="e-mail">
            <br>
            <button type="submit" name="submit">SIGN UP</button>
        </form>
    </div>
    <div class="log-in">
        <h4 style="font-family: Roboto Mono,sans-serif">LOGIN</h4>
        <p>Have an account? Login here!</p>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">LOGIN</button>
        </form>
    </div>
</section>
</body>
</html>
