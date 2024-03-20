<?php

include_once 'dbconfig.php';

session_start();

$user_ = $_SESSION["mailid"];

$sql = "SELECT regno,name,dept FROM students WHERE mail='$user_'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $student_ = $row["name"];
    $regno = $row["regno"];
    $dept = $row["dept"];

    $data = getAttendance($regno);
    
} else {
    echo "0 results";
}


function getAttendance($regno)
{
    include 'dbconfig.php';

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

        return $data;
        
    } else {
        echo "--- No record found ---";
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
</head>

<body>
    <div>
        <div class="student__detail">
            <h2><?php echo $student_ ?></h2>
            <h3><?php echo $regno ?></h3>
            <h4><?php echo $dept ?></h4>
        </div>
        <h1>Attendance</h1>
        <div className="attendance__section">
            <table>
                <thead>
                    <tr>
                        <td><h3>S No</h3>
                        </td>
                        <td><h3>Subject Name</h3>
                        </td>
                        <td><h3>Course Code</h3>
                        </td>
                        <td><h3>No. of Hours</h3>
                        </td>
                        <td><h3>Hours Present</h3>
                        </td>
                        <td><h3>Percentage</h3>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $index=>$trow) {
                    ?>
                        <tr>
                            <td><?php echo $index+1 ?></td>
                            <td><?php echo $trow["coursename"] ?></td>
                            <td><?php echo $trow["coursecode"] ?></td>
                            <td><?php echo $trow["totalhours"] ?></td>
                            <td><?php echo $trow["present"] ?></td>
                            <td><?php echo $trow["hoursabsent"] ?></td>
                            <td><?php echo $trow["percentage"] ?></td>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>