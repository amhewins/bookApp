<?php

    include 'dbConnection.php';

$author_id = $_POST['author_id'];
$title = $_POST['title'];
$year = $_POST['year'];
$rating = $_POST['rating'];

  $sql = "INSERT INTO books (author_id, title, year, rating)
  VALUES ('$author_id', '$title', '$year', '$rating')";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'head.php' ?>

    <title>bookApp Book Form</title>

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

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
  </body>
</html>