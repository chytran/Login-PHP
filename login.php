<!--============ HEADER ===========-->
<?php 
    include_once 'header.php'
?>

    <section class="signup-form">
        <h2>Log In</h2>
        <div class="signup-form-form">
            <form action="includes/login.inc.php" method="post" class="signup-form-form">
                <input type="text" name="uid" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="submit">Log In</button>
            </form>
        </div>

        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields! </p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login information</p>";
                }
            }
        ?>

    </section>

<!--============ FOOTER ===========-->
<?php
    include_once 'footer.php'
?>