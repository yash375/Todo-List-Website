<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="login style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
  <header class="header">

    <div id="menu-btn" class="fas fa-bars" onclick="menuOpen()"></div>

    <a href="index.php" class="logo"> TODO <i class="fas fa-hourglass-start"></i> </a>

    <nav id="navbar">
      <a href="index.php">home</a>
      <a href="index.php#feature">feature</a>
      <a href="about us.php">about us</a>
      <a href="contact.php">contact</a>
    </nav>

    <a href="join.php" class="btn">join now</a>

  </header>
  <div class="container">
    <div class="wrapper">

      <!-- LOGIN FORM LIES HERE -->


      <div class="title"><span>Login Form</span></div>

      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

      <form method="POST" action="./loginback.php">
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Email" name="mail" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="pass" required>
        </div>
        <div class="row button">
          <input type="submit" value="Login" name="submitin">
        </div>
        <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
      </form>
    </div>
  </div>

  <section class="footer">

    <div class="credit"> &copy; <span>GOVERNMENT POLYTECHNIC AWASARI(KHURD)</span> | TYCO</div>

  </section>



  <script type="text/javascript" src="script.js"></script>
</body>

</html>