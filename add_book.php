<?php
include('db/connection.php');  // Connect to database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get book details from the form
    $bookid = $_POST['bookid'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];

    // Insert data into the database
    $sql = "INSERT INTO books (bookid, title, author, year) VALUES ('$bookid', '$title', '$author', '$year')";
    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Add a New Book</h1>

        <form method="POST" action="add_book.php">
            <input type="text" name="bookid" placeholder="Book ID" required>
            <input type="text" name="title" placeholder="Title" required>
            <input type="text" name="author" placeholder="Author" required>
            <input type="number" name="year" placeholder="Year" required>
            <input type="submit" value="Add Book">
        </form>
    </div>

</body>
</html>
