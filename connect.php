<?php
$user = 'root';
$pass = '';
$db = 'ProjectManagement';

#$db = mysqli_connect('192.168.64.3', $user, $pass, $db) or die("Unable to connect");
$link = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");

//echo "Dataset Connected Successfully!";

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

mysqli_select_db($link, $db);
//echo "\n\nDatabase Found";


?>