<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <section class="login_section_">
        <div class="card">
            <div class="login_title">
                <h2>Login</h2>
            </div>
            <form method="post" action="getuser.php" class="login_form_">
                <div class="form-group">
                    <label for="email">Mail:</label><br>
                    <input type="text" name="mailid" placeholder="Mail Address" />
                </div>
                <div class="form-group">
                    <label for="password">Password:</label><br>
                    <input type="text" name="pwd" placeholder="Password" />
                </div>
                <div>
                    <button type="submit" name="save" style="text-decoration: none;">Login</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>