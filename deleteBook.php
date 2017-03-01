<?php

include 'dbConnection.php';

$book_id = $_GET['book_id'];

$sql = "DELETE FROM books WHERE id=$book_id";

$result = $conn->query($sql);

include 'head.php'; 

if ($conn->query($sql) === TRUE) {
    echo "Book deleted successfully";
} else {
    echo "There was an issue deleting the book: " . $conn->error;
}
$conn->close();

?>
        <div>
            <p>
                <a href="books.php">Return to Books page</a>
            </p>
        </div>
    </body>
</html>   