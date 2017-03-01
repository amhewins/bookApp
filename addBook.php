<?php

    include 'dbConnection.php';

$author_id = $conn->real_escape_string($_POST['author_id']);
$title = $conn->real_escape_string($_POST['title']);
$year = $conn->real_escape_string($_POST['year']);
$rating = $conn->real_escape_string($_POST['rating']);

if (isset($_POST['book_id'])) {
    $book_id = $_POST['book_id'];
    $sql =  "UPDATE books SET title='$title', year='$year', rating='$rating'
             WHERE id = $book_id";
}             
else {
    $sql = "INSERT INTO books (author_id, title, year, rating)
        VALUES ('$author_id', '$title', '$year', '$rating')";

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'head.php' ?>

    <title>bookApp Book Form</title>

  </head>

  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <div class="starter-template">

      <?php
      if ($conn->query($sql) === TRUE) {
          echo "<h2 class='form-signin-heading''>New record created successfully</h2> <br>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
       ?>

      Title: <?php echo $title ?><br>
      Year: <?php echo $year ?><br>
      Rating: <?php echo $rating ?><br>
      </div>
    </div>
    <?php include 'footer.php' ?>
  </body>
</html>