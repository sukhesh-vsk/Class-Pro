<?php
include_once 'dbconfig.php';

session_start();


if ( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"]) ) {

    $mail = $_POST['mailid'];
    $pass = $_POST['pwd'];

    $query = "SELECT * FROM students WHERE `mail` = '$mail' AND `password` = '$pass'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION["mailid"] = $mail;
        echo "Login Successfull !!";
    } else {
        echo "Unauthorised Error";
    }
}

$conn->close();

?>
