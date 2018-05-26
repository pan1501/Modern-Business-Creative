<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {

    $connect = mysqli_connect("au-cdbr-azure-east-a.cloudapp.net", "b495cdc010cae4", "581aa129") or die("could not connect to the database");
    mysqli_select_db($connect, "infs3202a2-db") or die("couldn't find database");

    // TODO: 24/05/2016 Use PHP from Pracs
    // TODO: 24/05/2016  SECURITY ERROR USE PARAM QUERY HERE
    // TODO: 24/05/2016  do not store pass and user as plain text
    $query = mysqli_query($connect, "SELECT * FROM users WHERE username= '$username'");

    $numrows = mysqli_num_rows($query);

    if ($numrows !== 0) {

        while ($row = mysqli_fetch_assoc($query)) {
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
        }

        if ($username == $dbusername && $password == $dbpassword) {

            echo "you are logged in";
            $_SESSION['username'] = $username;
        } else
            echo "your password is incorrect";

    } else
        die("that user doesn't exist");
} else
    die("please enter a username and password");

?>