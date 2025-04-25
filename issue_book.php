<?php
include('db/connection.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookid = $_POST['bookid'];
    $regno = $_POST['regno'];
    $issuedate = date('Y-m-d'); // Today's date

    // Insert into issued_books table
    $sql = "INSERT INTO issued_books (bookid, regno, issuedate) VALUES ('$bookid', '$regno', '$issuedate')";

    if ($conn->query($sql) === TRUE) {
        echo "Book issued successfully!";
    } else {
        echo "Error issuing book: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Issue a Book</h1>

    <form method="POST" action="issue_book.php">
        <input type="text" name="bookid" placeholder="Book ID" required>
        <input type="text" name="regno" placeholder="Student Registration No" required>
        <input type="submit" value="Issue Book">
    </form>
</div>

</body>
</html>
