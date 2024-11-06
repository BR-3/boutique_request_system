<?php
    require('dbh.inc.php');
   
    session_start();

    // checking if the input is valid and filled in
    if(isset($_POST['username']) && isset($_POST['user_password'])) {
        // getting username and password
        $username = $_POST['username'];
        $password = $_POST['user_password'];

        // checking if username is in the database and if password matches
        $query = 'select username from authorized_users where username = \'' . $username . '\' and password = \'' . $password .'\';';
        $result = mysqli_query($conn, $query);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);

        if(count($posts) == 1) { // only one username was found with matching username and password
            // setting the cookie
            setcookie('username', $username, time() + 4800);
            $_SESSION['logged_in'] = TRUE;
            header('Location: index.php');
            exit(); 
        } else {
            $_SESSION['logged_in'] = FALSE;
            header('Location: login.php?&message=Invalid input. Please try again.');
            exit();
        }


    }
    ?>