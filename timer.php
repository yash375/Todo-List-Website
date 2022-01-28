<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Timer</title>
    <link rel="stylesheet" href="clock.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="theme.js"></script>

</head>



<body class="white" onload="loader();">

    <nav>
        <ul>
            <li onclick="createGreen();">Green</li>
            <!-- <li onclick="createRed();">Red</li> -->
            <li onclick="createBlue();">Blue</li>
            <li onclick="createWhite();">White</li>
            <li onclick="createBlack();">Black</li>

        </ul>
    </nav>

    <!-- <header>
        <div class="logo" onclick="loadTheme();">
            <img onclick="" id="log" src="img/darklogo.png" alt="DigiClock">
        </div>
    </header> -->

    <div class="timeInput">
        <p>

            <label for="min">Enter the minutes :</label>
            <input type="number" value="0" name="min" id="min">
            <label for="sec">Enter the seconds :</label>
            <input type="number" value="0" name="sec" id="sec">
        </p>

        <p>
            <input type="submit" id="sub" value="Create Timer" onclick="setup();">
        </p>

    </div>

    <div class="clock" id="timer">

    </div>


    <!-- <footer>
        <a href="https://github.com/SwarupVishwas18"><i class="fab fa-github"></i></a>
        <a href="https://www.gpawasari.ac.in/"><i class="fas fa-university"></i></a>
        <br>

        &copy; Created by Swarup Deepak Vishwas
    </footer> -->
    <script src="clock.js"></script>
</body>

</html>