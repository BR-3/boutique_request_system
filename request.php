<?php include "header.php"; ?>

        <form action="loginRevalidate.inc.php" method="post">
            <fieldset id = "validate_credentials">
                <legend>Validate Your Employee Credentials</legend>
                <label for="workerName">Please enter your username:</label>
                <input type="text" name="workerName" placeholder="Requester's name"/><br>

                <!--confirm that they are a worker by entering their password-->
                <label for="confirmPassword">Please confirm your worker password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="*******"><br>

                <button type="submit" value="continue">Continue</button>
            </fieldset>
        </form>

<?php
    if (isset($_GET['message'])) {
        echo "<h2>" . $_GET['message'] . "</h2>";
    }
?>



<?php include "footer.php";?>