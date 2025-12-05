<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "studentdb";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$semester = $_POST['semester'];

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn):
    die("Database Connection Failed !");
endif;

$sql = "INSERT INTO studentInfo (FullName, Email, Phone, Department, Semester)
        VALUES ('$fullname','$email','$phone','$department','$semester')";

$success = mysqli_query($conn, $sql);
$error   = mysqli_error($conn);

mysqli_close($conn);
?>

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
            <?php if ($success) { ?>
                <h1 class="heading">Registration Successful</h1>
                <a class="button btn" href="index.php">Go Back</a>
            <?php } else { ?>
                <h1 class="heading">Registration Failed</h1>
                <p>Something Went Wrong !</p>
            <?php } ?>
        </div>
    </main>
</body>

</html>