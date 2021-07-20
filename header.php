<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Project</title>
    <!--================== CSS =====================-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="nav" id="nav">
        <ul class="nav__menu">
            <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
            <li class="nav__item"><a href="discover.php" class="nav__link">About Us</a></li>
            <li class="nav__item"><a href="blog.php" class="nav__link">Find Blogs</a></li>
            <?php 
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Profile page</a></li>";
                    echo "<li><a href='loginout.php'>Log out</a></li>";
                }
                else {
                    echo "<li><a href='signup.php'>Sign up</a></li>";
                    echo "<li><a href='login.php'>Log in</a></li>";
                }
            ?>
        </ul>
    </nav>