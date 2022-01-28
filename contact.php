<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsive Contact Us Form | CodingLab </title>
  <link rel="stylesheet" href="contact style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

  <!-- header start -->

  <?php
  if (isset($_POST['submit'])) {
    include('connect.php');
    // echo ("Hello");
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO contact (username, email, comment)
                VALUES ('$name', '$mail', '$comment')";

    if (mysqli_query($conn, $sql)) {
      echo "<script> createModal(); </script>";
    } else {
      // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  ?>


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





  <!-- header stop -->

  <div class="popup center">
    <div class="icon">
      <i class="fas fa-check"></i>
    </div>
    <div class="title">
      Thanks for your Feedback..!!
    </div>
    <div class="description">
      Your Feedback is very Priceless to us,Also Thanks for sharing it.
    </div>
    <div class="dismiss-btn">
      <button id="dismiss-popup-btn">
        OK
      </button>
    </div>
  </div>

  <div class="container">
    <div class="content">
      <div class="image-box">
        <img src="img/about2.jpg" alt="">
      </div>
      <form action="contact.php" method='POST'>
        <div class="topic">Send us a message</div>
        <div class="input-box">
          <input type="text" name='name' required>
          <label>Enter your name</label>
        </div>
        <div class="input-box">
          <input type="email" name='mail' placeholder="Enter your email" class='mail' required>
          <!-- <label>Enter your email</label> -->
        </div>
        <div class="message-box">
          <textarea class="place" name='comment' placeholder="Write Message" required></textarea>
        </div>
        <div class="input-box">
          <input type="submit" id="open-popup-btn" name='submit' value="Send Message">
        </div>
      </form>
    </div>
  </div>


  <script src="modal.js"></script>
  <script src='modal.js'></script>

  <script type="text/javascript" src="script.js"></script>
</body>

</html>