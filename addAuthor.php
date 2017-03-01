<?php
    include 'dbConnection.php';
//print_r($conn);
$first = $conn->real_escape_string($_POST['first']);
$last = $conn->real_escape_string($_POST['last']);
$age = $conn->real_escape_string($_POST['age']);
$education = $conn->real_escape_string($_POST['education']);

if (isset($_POST['author_id'])) {
    $author_id = $_POST['author_id'];
    $sql =  "UPDATE authors SET first='$first', last='$last', age='$age', education='$education'
             WHERE id = $author_id";
}             
else {
    $sql = "INSERT INTO authors (first, last, age, education)
        VALUES ('$first', '$last', '$age', '$education')";

}

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
            echo "<h1>New record created successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>


      First Name: <?php echo $first ?><br>
      Last Name: <?php echo $last ?><br>
      Age: <?php echo $age ?><br>
      Education: <?php echo $education ?><br>

    </div>
  </body>
</html>