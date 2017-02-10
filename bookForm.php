<?php

    include 'dbConnection.php';
    
    $sql = "SELECT id, first, last FROM  authors ";
    
    $authors = $conn->query($sql);
    

?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <?php include 'head.php'?>
        <title>bookApp Book Form</title>
        
        
        <link href="bookForm.css" rel="stylesheet">
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
             
    </head>

  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <form action="addBook.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Add Book</h2>
          <div>
              <lable for="author_id">Author:</lable>
              <select name="author_id">
                <?php
                if ($authors->num_rows > 0) {
                    // output data of each row
                    while($author = $authors->fetch_assoc()) {
                        echo "<option value='" . $author["id"] ."'";
                        echo ">" . $author["first"] . " " . $author["last"] . "</option>";
                    }
                }
                ?>
              </select>
          </div>
          <div>
              <label for="title">Title:</label>
              <input type="text" name="title" class="form-control" />
          </div>
          <div>
              <label for="year">Year:</label>
              <input type="text" name="year" class="form-control" />
          </div>
          <div>
              <lable for="rating">Rating -/5:</lable>
              <input type="text" name="rating" class="form-control" />
          </div>
          <br>
          <div class="button">
              <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
          </div>
      </form>
    </div>
  </body>
</html>