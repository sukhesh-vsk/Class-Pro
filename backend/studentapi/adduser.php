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
    
    $query = "INSERT INTO students(`regno`, `name`, `dept`, `batch`, `dob`, `phno`, `mail`, `password`) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssssssss", $regNo, $name_, $dept, $batch, $dob, $phNo, $email, $password_);

    if(mysqli_stmt_execute($stmt)) {
        echo "New record created successfully";
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header('location: login.php');
        exit();
    } else {
        echo "Error: Unable to execute statement. ";
    }
}
?>