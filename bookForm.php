<?php

    include 'dbConnection.php';
    
    $sql = "SELECT id, first, last FROM  authors ";
    
    $authors = $conn->query($sql);
    
    if (isset($_GET['book_id'])) {
      $book_id = $_GET['book_id'];
      
    $bookSQL = "SELECT * FROM books where id = $book_id";
    $book = $conn->query($bookSQL)->fetch_assoc();
    
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <?php include 'head.php'?>
        <title>bookApp Book Form</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
             
    </head>

  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <form action="addBook.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Add Book</h2>
        <?php if(isset($book_id)) echo "<input type='hidden' name='book_id' value=" . $book_id ." >"; ?>
          <div>
              <lable for="author_id">Author:</lable>
              <select name="author_id">
                <?php
                if ($authors->num_rows > 0) {
                    // output data of each row
                    while($author = $authors->fetch_assoc()) {
                        echo "<option value='" . $author["id"] ."'";
                        if (isset($book['author_id']) and $book['author_id'] == $author["id"]) echo "selected";
                        echo ">" . $author["first"] . " " . $author["last"] . "</option>";
                    }
                }
                ?>
                
              </select>
          </div>
          <div>
              <label for="title">Title:</label>
              <input type="text" name="title" class="form-control" <?php if (isset($book['title'])) echo "value='" . $book['title'] . "'" ?> />
          </div>
          <div>
              <label for="year">Year:</label>
              <input type="text" name="year" class="form-control" <?php if (isset($book['year'])) echo "value='" . $book['year'] . "'" ?> />
          </div>
          <div>
              <lable for="rating">Rating -/5:</lable>
              <input type="text" name="rating" class="form-control" <?php if (isset($book['rating'])) echo "value='" . $book['rating'] . "'" ?> />
          </div>
          <br>
          <div class="button">
              <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
          </div>
      </form>
    </div>
    <?php include 'footer.php' ?>
  </body>
</html>