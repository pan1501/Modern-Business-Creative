<?
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_POST) {
    $con = mysqli_connect("au-cdbr-azure-east-a.cloudapp.net", "b495cdc010cae4", "581aa129");

    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }

    mysqli_select_db($con, "infs3202a2-db");

    $users_name = $_POST['user_name'];
    $users_phone = $_POST['user_phone'];
    $users_email = $_POST['user_email'];
    $users_message = $_POST['user_message'];


    $query = "INSERT INTO `infs3202a2-db`.`contact` (`name`, `phone`, `email`, `message`) VALUES ('$users_name', '$users_phone', '$users_email', '$users_message');";

    mysqli_query($con, $query);

    header("Location:contact.html");

}
?>