<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div>
        <h1>Login</h1>
        <form method="post" action="getuser.php">
            <div>
                <input type="text" name="mailid" placeholder="Mail Address" />
            </div>
            <div>
                <input type="text" name="pwd" placeholder="Password" />
            </div>
            <button type="submit" name="save">Login</button>
        </form>
    </div>
</body>

</html>