<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
</head>

<body>
    <div>
        <h1>Register New Student</h1>
        <form method="post" action="adduser.php">
            <div>
                <input type="text" name="name_" placeholder="Student Name" />
            </div>
            <div>
                <input type="text" name="regno" placeholder="Register Number" />
            </div>
            <div>
                <input type="text" name="dob" placeholder="Date of Birth" />
            </div>
            <div>
                <input type="text" name="dept" placeholder="Department" />
            </div>
            <div>
                <input type="text" name="batch" placeholder="Batch" />
            </div>
            <div>
                <input type="text" name="mailid" placeholder="Email" />
            </div>
            <div>
                <input type="text" name="phno" placeholder="Phone Number" />
            </div>
            <div>
                <input type="password" name="pwd" placeholder="Password" />
            </div>
            <input type="submit" name="save" value="submit" />
        </form>

    </div>
</body>

</html>