<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $coursename = $_POST['coursename'];
    $coursecode = $_POST['coursecode'];
    $dept = $_POST['dept'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "class_pro";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO courses (coursename, courseid, dept) VALUES ('$coursename', '$coursecode', '$dept')";

    if ($conn->query($sql) === TRUE) {
        echo "Course added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Courses</title>
</head>
<body>

    <form method="POST">
        <div>
            <h1>Add Courses</h1>
            <div>
                <input type="text" name="coursename" placeholder="Course Name" />
            </div>
            <div>
                <input type="text" name="coursecode" placeholder="Course Code" />
            </div>
            <div>
                <input type="text" name="dept" placeholder="Department" />
            </div>
            <button type="submit" name="save">Add Course</button>
        </div>
    </form>
</body>
</html>