<?php

if (isset($_POST['submitin'])) {

    session_start();


    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    include('connect.php');

    $sql = "SELECT * FROM user WHERE mail='$mail'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['mail'] === $mail && $row['pwd'] === $pass) {
            $_SESSION['mail'] = $mail;
            header('Location: ./main.php');
        } else {
            header('Location: ./login.php?error=Incorrect Password or Mail');
            exit();
        }
    } else {
        header('Location: ./login.php?error=Mail is not Registred');
        exit();
    }
} else {
    // header('Location: ./cont.php');
    echo "Not posible dude";
}
