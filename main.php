<?php
session_start();

if (isset($_SESSION['mail'])) {

?>

    <!DOCTYPE html>
    <html lang="en">
 
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>TodoList</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <!-- <link rel="stylesheet" href="./style.css" /> -->
        <link rel="stylesheet" href="./theri.css" />
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

            <a href="logout.php" class="btn">Log Out</a>


        </header>

        <div class="greet"><?php echo "Hello, " . $_SESSION['mail']; ?></div>

        <form>
            <input type="text" class="todo-input" />
            <button class="todo-button" type="submit">
                <i class="fas fa-plus-square"></i>
            </button>
            <div class="select">
                <select name="todos" class="filter-todo">
                    <option value="all">All</option>
                    <option value="completed">Completed</option>
                    <option value="uncompleted">Uncompleted</option>
                </select>
            </div>
        </form>
        <div class="todo-container">
            <ul class="todo-list"></ul>
        </div>

        <div class="btn1" onclick="openTimer();">Start Timer..!!</div>


        <?php
        include('app.php');
        ?>
        <script src="./clock.js"></script>
        <script src="./script.js"></script>
    </body>

    </html>


<?php
} else {
    echo "Session Not Found";
}
