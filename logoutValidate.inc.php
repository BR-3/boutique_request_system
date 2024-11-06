<?php
    if(isset($_COOKIE['username'])) {
        setcookie('username', '', time()-4800);
        header('Location: login.php');
        exit();
    }

?>