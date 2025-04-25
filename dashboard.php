<?php
include('db/connection.php');

// Fetch all students and issued books
$students_sql = "SELECT * FROM students";
$issued_books_sql = "SELECT * FROM issued_books";

$students_result = $conn->query($students_sql);
$issued_books_result = $conn->query($issued_books_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Admin Dashboard</h1>

    <h2>Registered Students</h2>
    <table>
        <tr>
            <th>Reg No</th>
            <th>Name</th>
            <th>Class</th>
        </tr>
        <?php while($row = $students_result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['regno']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['class']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <h2>Issued Books</h2>
    <table>
        <tr>
            <th>Book ID</th>
            <th>Student Reg No</th>
            <th>Issue Date</th>
            <th>Return Date</th>
        </tr>
        <?php while($row = $issued_books_result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['bookid']; ?></td>
                <td><?php echo $row['regno']; ?></td>
                <td><?php echo $row['issuedate']; ?></td>
                <td><?php echo $row['returndate']; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
