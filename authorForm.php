<!DOCTYPE html>
<html lang="en">
  <head>
        <?php include 'head.php'?>
        <title>bookApp Author Form</title>
        
        <link href="authorForm.css" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
    </head>

  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <form action="addAuthor.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Add Author</h2>
        
              <label for="first"> First Name:</label>
              <input type="text" name="first" class="form-control" />
              
              <label for="last">Last Name:</label>
              <input type="text" name="last" class="form-control" />
              
              <label for="last">Age:</label>
              <input type="text" name="age" class="form-control" />
              
              <label for="last">Education:</label>
              <input type="text" name="education" class="form-control" />
              
          <br>
          <div class="button">
              <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
          </div>
      </form>
    </div>
  </body>
</html>