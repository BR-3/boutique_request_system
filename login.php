<?php include "header.php"; ?> 

<!-- TODO: add some response to happen if the user enters the wrong password and is redirected here -->

    <form action="loginValidate.inc.php" method="post">
        <fieldset>
            <legend>Log In To Fashion Boutique Portal</legend>

            <!--user will enter username and password -->
            <input type="text" id="username" name="username" placeholder="Username"><br>
            <input type="password" id="user_password" name="user_password" placeholder="******"><br>

            <button type="submit" value="submit">Login</button>
            <button type="cancel" value="cancel">Cancel</button>
        </fieldset>

    </form>

    <?php
    // checking if the message says input is invalid
    if (isset($_GET['message'])) {
        echo "<h2>" . $_GET['message'] . "</h2>";
    }
?>
<?php include "footer.php"; ?>