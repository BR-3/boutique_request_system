<?php
session_start();

var_dump($_POST);

// now the user is logged in, will compare credentials with the cookie instead of from the db
// Check if the 'logged_in' cookie exists and has the value 'TRUE'
if (isset($_COOKIE['username'])) {
    // Check if username in the cookie matches the submitted username
    if ($_POST['workerName'] === $_COOKIE['username']) {
            header('Location: form.php');
            exit();
    } else {
        header("Location: request.php?&message=Invalid username. Please try again.");
        exit();
    }
} else {
    header("Location: request.php?&message=You are not logged in. Please <a href='login.php'>log in</a> first.");
    exit();
}
?>