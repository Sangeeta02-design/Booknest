<?php
include('db/connection.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $regno = $_POST['regno'];
    $sname = $_POST['sname'];
    $class = $_POST['class'];

    // Insert student details into the database
    $sql = "INSERT INTO students (regno, sname, class) VALUES ('$regno', '$sname', '$class')";
    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully!";
    } else {
        echo "Error registering student: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Register Student</h1>

    <form method="POST" action="register_student.php">
        <input type="text" name="regno" placeholder="Registration No" required>
        <input type="text" name="sname" placeholder="Student Name" required>
        <input type="text" name="class" placeholder="Class" required>
        <input type="submit" value="Register Student">
    </form>
</div>

</body>
</html>
