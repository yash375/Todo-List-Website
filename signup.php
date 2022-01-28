<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <link rel="stylesheet" href="login style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
      <div class="title"><span>Signup Form</span></div>

      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

      <!-- FORM LIES HERE -->

      <form action="./signupback.php" method="POST">

        <!-- MAIL Enter here -->

        <div class="row">
          <i class="fas fa-user"></i>
          <input name='mail' type="email" placeholder="Email" required>
        </div>

        <!-- PASSWORD Enter here -->


        <div class="row">
          <i class="fas fa-lock"></i>
          <input name='pass' type="password" placeholder="Password" required>
        </div>

        <!-- RETYPE PASSWORD Enter here -->


        <div class="row">
          <i class="fas fa-lock"></i>
          <input name='repass' type="password" placeholder="Confirm Password" required>
        </div>

        <!-- SUBMIT Enter here -->


        <div class="row button">
          <input name="submitup" type="submit" value="Signup">
        </div>
        <div class="signup-link">Already have an Member? <a href="login.php">Login</a></div>
      </form>



    </div>
  </div>

  <section class="footer">

    <div class="credit"> &copy; <span>GOVERNMENT POLYTECHNIC AWASARI(KHURD)</span> | TYCO</div>

  </section>



  <script type="text/javascript" src="script.js"></script>
</body>

</html>