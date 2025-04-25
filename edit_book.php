<?php
include('db/connection.php');

// Check if book ID is provided
if (isset($_GET['id'])) {
    $bookid = $_GET['id'];

    // Fetch current book data
    $sql = "SELECT * FROM books WHERE bookid='$bookid'";
    $result = $conn->query($sql);
    $book = $result->fetch_assoc();

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];

        // Update book data
        $sql = "UPDATE books SET title='$title', author='$author', year='$year' WHERE bookid='$bookid'";

        if ($conn->query($sql) === TRUE) {
            echo "Book updated successfully!";
            header("Location: view_books.php");
        } else {
            echo "Error updating book: " . $conn->error;
        }
    }
} else {
    echo "Book ID is required.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Edit Book Details</h1>

    <form method="POST" action="edit_book.php?id=<?php echo $bookid; ?>">
        <input type="text" name="title" value="<?php echo $book['title']; ?>" placeholder="Title" required>
        <input type="text" name="author" value="<?php echo $book['author']; ?>" placeholder="Author" required>
        <input type="number" name="year" value="<?php echo $book['year']; ?>" placeholder="Year" required>
        <input type="submit" value="Update Book">
    </form>
</div>

</body>
</html>
