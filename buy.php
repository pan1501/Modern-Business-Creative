<?php
session_start();

ini_set('display_errors', '1');
$connect = mysqli_connect("au-cdbr-azure-east-a.cloudapp.net", "b495cdc010cae4", "581aa129") or die("could not connect to the database");
$db = mysqli_select_db($connect, "infs3202a2-db") or die("couldn't find database");



if (isset($_POST['username'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
} else {
    header('Location: customize.php');
}


if (isset($_POST['password'])) {
    $password = (MD5($_POST['password']));
    $password = mysqli_real_escape_string($connect, $password);
} else {
    header('Location: customize.php');
}

if (isset($_POST['case'])) {
    $case = ($_POST['case']);
} else {
    header('Location: customize.php');
}


if (isset($_POST['cpu'])) {
    $cpu = ($_POST['cpu']);
} else {
    header('Location: customize.php');
}


if (isset($_POST['mb'])) {
    $motherboard = $_POST['mb'];
} else {
    header('Location: customize.php');;
}

if (isset($_POST['gpu'])) {
    $gpu = $_POST['gpu'];
} else {
    header('Location: customize.php');;
}

if (isset($_POST['ram'])) {
    $ram = $_POST['ram'];
} else {
    header('Location: customize.php');;
}

if (isset($_POST['storage2'])) {
    $storage2 = $_POST['storage2'];
} else {
    header('Location: customize.php');;
}

if (isset($_POST['storage'])) {
    $storage = $_POST['storage'];
} else {
    header('Location: customize.php');;
}

if (isset($_POST['psu'])) {
    $psu = $_POST['psu'];
} else {
    header('Location: customize.php');;
}

if (isset($_POST['user_email'])) {
    $email = $_POST['user_email'];
} else {
    header('Location: customize.php');;
}

if (isset($_POST['user_phone'])) {
    $phone = $_POST['user_phone'];
} else {
    header('Location: customize.php');;
}

if (isset($_POST['user_name'])) {
    $name = $_POST['user_name'];
} else {
    header('Location: customize.php');;
}

if (isset($_POST['user_message'])) {
    $message = $_POST['user_message'];
} else {
    header('Location: customize.php');;
}



$sql = "INSERT INTO `infs3202a2-db`.`users` (`username`, `password`, `case`, `cpu`, `motherboard`, `gpu`, `ram`, `storage2`, `storage`, `psu`, `email`, `phone`, `name`, `message`) VALUES ('$username', '$password', '$case', '$cpu', '$motherboard', '$gpu', '$ram', '$storage2', '$storage', '$psu', '$email', '$phone', '$name', '$message')";



if (mysqli_query($connect, $sql)) {
    echo "it works";

} else {
    echo "something went wrong";
}
?>