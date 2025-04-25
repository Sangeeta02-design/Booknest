<?php
include('db/connection.php');

if (isset($_GET['id'])) {
    $bookid = $_GET['id'];

    $sql = "DELETE FROM books WHERE bookid='$bookid'";

    if ($conn->query($sql) === TRUE) {
        echo "Book deleted successfully!";
        header("Location: view_books.php"); // Redirect back to view_books page
    } else {
        echo "Error deleting book: " . $conn->error;
    }
}
?>
