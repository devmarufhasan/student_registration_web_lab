<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Student Registration</title>
</head>

<body>
    <main>
        <div class="content_full_height">
            <h1 class="heading">Student Registration</h1>

            <div class="registration-form">
                <form action="register.php" method="POST">
                    <div class="form-field">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-field">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-field">
                        <label for="department">Department</label>
                        <input type="text" id="department" name="department" placeholder="Enter your department name" required>
                    </div>
                    <div class="form-field">
                        <label for="semester">Semester</label>
                        <input type="text" id="semester" name="semester" placeholder="Enter your semester number" required>
                    </div>
                    <div>
                        <button class="button" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>