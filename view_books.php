<?php
include('db/connection.php');  // Connect to database

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>All Books</h1>

        <?php
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Book ID</th><th>Title</th><th>Author</th><th>Year</th><th>Actions</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["bookid"] . "</td><td>" . $row["title"] . "</td><td>" . $row["author"] . "</td><td>" . $row["year"] . "</td>
                <td class='actions'>
                    <a href='edit_book.php?id=" . $row["bookid"] . "'>Edit</a> |
                    <a href='delete_book.php?id=" . $row["bookid"] . "'>Delete</a>
                </td></tr>";
            }
            echo "</table>";
        } else {
            echo "No books found.";
        }
        ?>
    </div>

</body>
</html>
