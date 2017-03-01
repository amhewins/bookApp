<?php

    include 'dbConnection.php';
    
    $sql = "SELECT first, last FROM  authors ";
    
    $authors = $conn->query($sql);
    
    if (isset($_GET['author_id'])) {
      $author_id = $_GET['author_id'];
      
    $authorSQL = "SELECT * FROM authors where id = $author_id";
    $author = $conn->query($authorSQL)->fetch_assoc();
    
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <?php include 'head.php'?>
        <title>bookApp Author Form</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
    </head>

  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <form action="addAuthor.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Add Author</h2>
        <?php if(isset($author_id)) echo "<input type='hidden' name='author_id' value=" . $author_id ." >"; ?>
        
              <label for="first"> First Name:</label>
              <input type="text" name="first" class="form-control" <?php if (isset($author['first'])) echo "value='" . $author['first'] . "'" ?> />
              
              <label for="last">Last Name:</label>
              <input type="text" name="last" class="form-control" <?php if (isset($author['last'])) echo "value='" . $author['last'] . "'" ?> />
              
              <label for="last">Age:</label>
              <input type="text" name="age" class="form-control" <?php if (isset($author['age'])) echo "value='" . $author['age'] . "'" ?> />
              
              <label for="last">Education:</label>
              <input type="text" name="education" class="form-control" <?php if (isset($author['education'])) echo "value='" . $author['education'] . "'" ?> />
              
          <br>
          <div class="button">
              <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
          </div>
      </form>
    </div>
  </body>
</html>