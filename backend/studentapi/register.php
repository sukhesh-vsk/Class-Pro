<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link rel="stylesheet" href="./assets/css/register.css">
</head>

<body>
    <section class="signup_section_">
        <div class="card">
            <div class="signup_header">
                <h2>Signup</h2>
            </div>
            <form method="post" action="adduser.php" class="register_form_">
                <div class="form-group">
                    <input type="text" name="name_" id="student-name" placeholder="Student Name"/>
                </div>
                <div class="form-group">

                    <input type="text" name="regno" id="register_no" placeholder="Register Number" />
                </div>
                <div class="form-group">

                    <input type="text" name="dob" id="date-of-birth" placeholder="Date of Birth" />
                </div>
                <div class="form-group">
                    <input type="text" name="dept" id="department" placeholder="Department" />
                </div>
                <div class="form-group">

                    <input type="text" name="batch" id="batch" placeholder="Batch" />
                </div>
                <div class="form-group">

                    <input type="text" name="mailid" id="email" placeholder="Email" />
                </div>
                <div class="form-group">

                    <input type="text" name="phno" id="phone-number" placeholder="Phone Number" />
                </div>
                <div class="form-group">

                    <input type="text" name="pwd" id="password" placeholder="Password" />
                </div>
                <div class="form-group">

                    <input type="text" id="confirm-password" placeholder="Confirm Password" />
                </div>
                <div class="login__route" style="text-align: center;">
                    <a class="login__" href="login.php">Already have a account ?</a>
                </div>
                <div class="register_btn">
                    <button type="submit" name="save">Signup</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>