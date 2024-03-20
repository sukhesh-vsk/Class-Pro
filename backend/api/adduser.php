<?php
include_once 'dbconfig.php';

if(isset($_POST['save'])) {
    $name_ = $_POST['name_'];
    $regNo = $_POST['regno'];
    $dept = $_POST['dept'];
    $batch = $_POST['batch'];
    $phNo = $_POST['phno'];
    $email = $_POST['mailid'];
    $dob = $_POST['dob'];
    $password_ = $_POST['pwd'];

    $query = "INSERT INTO students(`regno`, `name`, `dept`, `batch`, `dob`, `phno`, `mail`, `password`) VALUES('$regNo', '$name_', '$dept', '$batch', '$dob', '$phNo', '$email', '$password_')";

    if(mysqli_query($conn, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>