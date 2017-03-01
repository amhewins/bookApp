<?php

    include 'dbConnection.php';
    
    
    //$sql = "SELECT * FROM  books JOIN authors ON books.author_id = authors.id";
    
    $sql = "SELECT
        books.id as book_id, books.title as bookName, year, rating
        FROM books";
    
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
        <title>bookApp</title>
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include 'nav.php' ?>
        <div class="container">
            
            <h1>Books</h1>
            
            <table class = "table table-striped">
   
               <thead>
                  <tr>
                     <th>Title</th>
                     <th>Year</th>
                     <th>Rating</th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
               
               <tbody>
                    <tbody>
            
            <?php
                  if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                          echo "<tr><td>" . $row['bookName'] . " </td><td> " . $row['year'] . " </td><td> " . $row['rating'] . " </td><td> <a href=deleteBook.php?book_id=" . $row['book_id']  ."> delete book</a>" . 
                            " </td><td> <a href=bookForm.php?book_id=" . $row['book_id']  . "> update book</a>". "</td></tr>";
                          
                      }
                  }
              ?>
              
              </tbody>
                </tbody>
            	
            </table>
            
            <p>
                <a href="bookForm.php">Add New Book</a>
            </p>
        </div> <!--container-->
        <?php include 'footer.php' ?>
    </body>
</html>