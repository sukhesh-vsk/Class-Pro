<?php
include_once 'dbconfig.php';

session_start();


if ( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"]) ) {

    $mail = $_POST['mailid'];
    $pass = $_POST['pwd'];

    $query = "SELECT `name` FROM students WHERE `mail` = '$mail' AND `password` = '$pass'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION["student"] = $result->fetch_assoc()["name"];
        mysqli_close($conn);
        header('location: dashboard.php');
        echo "Login Successfull !!";
        exit();
    } else {
        header('location: login.php');
        echo "Unauthorised Error";
    }
}

?>
