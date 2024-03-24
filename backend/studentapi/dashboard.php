<?php
    session_start();
    if(!isset($_SESSION['student'])){
        header('location: login.php');
    }
    $student_ = $_SESSION['student'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/dashboard.css">
    <title>Dashboard</title>
</head>
<body class="dashboard">
    <section class="dash_section">
            <div class="navbar">
                <div class="navbar-brand">Class Pro</div>
                <div class="navbar-links">
                    <a href=""><?= $student_ ?></a>
                </div>
            </div>
            <div class="dash_content_">
                <div>
                    <a class="atd_btn_" href="viewattendance.php">View Attendance</a>
                </div>
            </div>
        </section>
    </body>
</html>
