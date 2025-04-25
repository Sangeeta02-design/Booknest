<?php
include('db/connection.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookid = $_POST['bookid'];
    $regno = $_POST['regno'];
    $returndate = $_POST['returndate'];

    // Update return date
    $sql = "UPDATE issued_books SET returndate='$returndate' WHERE bookid='$bookid' AND regno='$regno' AND returndate IS NULL";

    if ($conn->query($sql) === TRUE) {
        echo "Book returned successfully!";
    } else {
        echo "Error returning book: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Return a Book</h1>

    <form method="POST" action="return_book.php">
        <input type="text" name="bookid" placeholder="Book ID" required>
        <input type="text" name="regno" placeholder="Student Registration No" required>
        <input type="date" name="returndate" placeholder="Return Date" required>
        <input type="submit" value="Return Book">
    </form>
</div>

</body>
</html>
