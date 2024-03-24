<?php

include_once 'dbconfig.php';

session_start();

$student_ = $_SESSION['student'];

$sql = "SELECT regno,dept FROM students WHERE `name`='$student_'";
$result = $conn->query($sql);
$flag = false;
$msg = "";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $regno = $row["regno"];
    $dept = $row["dept"];

    $data = getAttendance($regno);
}


function getAttendance($regno)
{
    include 'dbconfig.php';
    global $flag, $msg;
    $sql = "SELECT a.*, c.coursename
            FROM attendance a 
            INNER JOIN courses c ON a.coursecode = c.courseid
            WHERE regno='$regno'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
        
        $flag = true;

        return $data;
    } else {
        $msg = "--- No records found ---";
    }

    $conn->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Attendance</title>
    <link rel="stylesheet" href="./assets/css/atdnavbar.css">
</head>

<body>
        <nav>
            <ul class="navbar_">
                <div class="clge_">
                    <li><b>ABC College of Technology</b></li>
                </div>
                <div class="atdnavlinks_">
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="/studentapi">Logout</a></li>
                </div>
            </ul>
        </nav>
        <div class="student__detail">
            <h2><?php echo $student_ ?></h2>
            <h3><?php echo $regno ?></h3>
            <h4><?php echo $dept ?></h4>
        </div>
        <hr/>
        <div class="section__head">
            <center><h1>Attendance</h1></center>
        </div>
        <div class="attendance__section">
            <table>
                <thead>
                    <tr>
                        <td>
                            <h3>S No</h3>
                            </td>
                        <td>
                            <h3>Subject Name</h3>
                            </td>
                        <td>
                            <h3>Course Code</h3>
                            </td>
                        <td>
                            <h3>No. of Hours</h3>
                            </td>
                        <td>
                            <h3>Hours Present</h3>
                            </td>
                        <td>
                            <h3>Percentage</h3>
                            </td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($flag) {
                        foreach ($data as $index => $trow) {
                        ?>
                        <tr>
                            <td><?php echo $index + 1 ?></td>
                            <td><?php echo $trow["coursename"] ?></td>
                            <td><?php echo $trow["coursecode"] ?></td>
                            <td><?php echo $trow["totalhours"] ?></td>
                            <td><?php echo $trow["present"] ?></td>
                            <td><?php echo $trow["percentage"] ?></td>
                        </tr>
                        <?php
                        }
                    } else {
                    ?>
                    <tr>
                        <td colspan="6"><?php echo $msg ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
</body>

</html>