<?php
require('dbh.inc.php');

$clothingType = $_POST['clothingType'];
$clothingID = $_POST['clothingID'];
$size = $_POST['sizeSelect'];
$urgency = array_key_exists('urgency', $_POST) ? 1 : 0;
$otherInfo = $_POST['otherInformation'];
$filled = 0;

// update the request_list table
$updaterl = mysqli_prepare($conn, "INSERT INTO `request_list` (`clothingID`, `clothingType`, `size`, `urgency`, `additionalInfo`, `requestFilled`, `requestDateTime`) VALUES (?, ?, ?, ?, ?, ?, NOW())");
mysqli_stmt_bind_param($updaterl, "issssi", $clothingID, $clothingType, $size, $urgency, $otherInfo, $filled);
mysqli_stmt_execute($updaterl);
mysqli_stmt_close($updaterl);

// check if the clothingID is in the table. if so, increment that one size index
// if not, add another line to the table, e/t 0 except hte one request
$checkQuery = "SELECT * FROM request_history WHERE clothingID = ?";
$stmt = mysqli_prepare($conn, $checkQuery);
mysqli_stmt_bind_param($stmt, "i", $clothingID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$rowCount= mysqli_num_rows($result);
mysqli_stmt_close($stmt);

if ($rowCount == 0) { // if no requests of this item have been made, create a record
    // insert new record
    $insertQuery = "Insert into `request_history` (`clothingID`, `x-small`, `small`, `medium`, `large`, `x-large`) Values (?,0,0,0,0,0)";
    $stmt = mysqli_prepare($conn, $insertQuery);
    mysqli_stmt_bind_param($stmt, "i", $clothingID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}


// Update the existing record
$updateQuery = "UPDATE `request_history` SET `" . $size . "`= (`" . $size . "`+ 1) WHERE `clothingID` = ? limit 1";
$stmt = mysqli_prepare($conn, $updateQuery);
mysqli_stmt_bind_param($stmt, "i", $clothingID);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);


// possibly send the requestID over post to the success page
header("Location: requestSuccess.php?&id=$id"); // Redirect to success page
exit();

