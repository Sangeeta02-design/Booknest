<?php
include('db/connection.php');

$result = $conn->query("SELECT * FROM issued_books");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Issued Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Issued Books</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Book ID</th>
                <th>Reg No</th>
                <th>Issue Date</th>
                <th>Return Date</th>
            </tr>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['bookid'] ?></td>
                <td><?= $row['regno'] ?></td>
                <td><?= $row['issuedate'] ?></td>
                <td><?= $row['returndate'] ?: 'Not Returned' ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
