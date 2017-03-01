<?php

    include 'dbConnection.php';
    
    
    //$sql = "SELECT * FROM  books JOIN authors ON books.author_id = authors.id";
    
    $sql = "SELECT
        books.id as book_id, books.title as bookName, year, rating, author_id,
        authors.first as authorName, last, age, education
        FROM books JOIN authors ON books.author_id = authors.id";
    
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>bookApp</title>
    </head>
    <?php include 'head.php' ?>
    <body>
        <?php include 'nav.php' ?>
        <div class="container">
            
            <h1>Books</h1>
              
            <table class = "table table-striped">
   
               <thead>
                  <tr>
                     <th>Book</th>
                     <th>Year</th>
                     <th>Rating</th>
                     <th>Author</th>
                     <th>Age</th>
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
                                  echo "<tr><td>" . $row['bookName'] . " </td><td> " . $row['year'] . " </td><td> " . $row['rating'] . " </td><td> ". $row['authorName'] . " " . $row['last'] . " </td><td> " . $row['age'] . 
                                  " </td><td> <a href=deleteBook.php?book_id=" . $row['book_id']  ."> Delete Book</a>" . 
                                    " </td><td> <a href=bookForm.php?book_id=" . $row['book_id']  . "> Update Book</a>". "</td></tr>";
                                  
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