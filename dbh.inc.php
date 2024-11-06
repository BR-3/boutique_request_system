<?php

$serverName='localhost';
$DBuserName = 'root';
$DBpassword = '';
$DBname = 'clothing_site';

$conn = mysqli_connect($serverName, $DBuserName, $DBpassword, $DBname);

if(mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_errno();
}