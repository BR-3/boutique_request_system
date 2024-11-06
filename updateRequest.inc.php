<?php

/*
this page will update the request_list table in the database to 
reflect which requests have now been fulfilled.
It will then reroute the user back to the same page which will have
been reloaded.
*/
require('dbh.inc.php');

$updateQuery = mysqli_prepare($conn, 'update `request_list` set `requestFilled` = 1 where `request_list`.`requestID`=?;');
mysqli_stmt_bind_param($updateQuery, "i", $_POST['requestID']);

if (mysqli_stmt_execute($updateQuery)) {
    $affectedRows = mysqli_stmt_affected_rows($updateQuery);
    if ($affectedRows > 0) {
        header("Location: requestHistory.php");
        exit();
    } else {
        echo "error updating the request";
    }
    mysqli_stmt_close($updateQuery);
} else {
    echo "Error: " . mysqli_error($conn);
}