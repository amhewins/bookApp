<?php

include 'dbConnection.php';

$author_id = $_GET['author_id'];

$sql = "DELETE FROM authors WHERE id=$author_id";

$result = $conn->query($sql);

include 'head.php'; 

if ($conn->query($sql) === TRUE) {
    echo "Author deleted successfully";
} else {
    echo "There was an issue deleting the author: " . $conn->error;
}
$conn->close();

?>

        <div>
            <p>
                <a href="authors.php">Return to Authors page</a>
            </p>
        </div>
    </body>
</html> 