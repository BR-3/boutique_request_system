<?php include "header.php"; 


require('dbh.inc.php');
    if(isset($_COOKIE['username'])) { 

        // loading the user's information from the database
        /*
        TODO: eventually add a way to update the user's info over here
        */
        $query = 'select * from authorized_users where username = \'' . $_COOKIE['username'] . '\';';
        $result = mysqli_query($conn, $query);
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($conn);

        echo $posts[0]['firstName'] . ' ' . $posts[0]['lastName'];
        echo "<p>Username: " . $posts[0]['username'] . "</p>";
        echo "<p>Password: " . $posts[0]['password'] . "</p>";

        echo "<form id=logout action='logoutValidate.inc.php' method='post'>";
        echo "<button type = submit value=logout>Log Out</button>";
        echo "</form>";
    } else {
        echo "You are not logged in. Please <a href=login.php>login</a>";
    }

?>

<?php include "footer.php"; ?>