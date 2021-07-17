<!--============ HEADER ===========-->
<?php 
    include_once 'header.php'
?>

    <section class="signup-form">
        <h2>Log In</h2>
        <div class="signup-form-form">
            <form action="login.inc.php" method="post" class="signup-form-form">
                <input type="text" name="name" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="submit">Log In</button>
            </form>
        </div>
    </section>

<!--============ FOOTER ===========-->
<?php
    include_once 'footer.php'
?>