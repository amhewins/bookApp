<?php

    include 'dbConnection.php';
    
    
    $sql = "SELECT
        authors.id as author_id, first, last, age, education
        FROM authors";
    
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "head.php" ?>
        <title>bookApp Authors</title>
    <body>
        <?php include 'nav.php' ?>
        <div class="container">
            
            <h1>Authors</h1>
            
            <table class = "table table-striped">
   
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Age</th>
                     <th>Education</th>
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
                          echo "<tr><td>" . $row['first'] . "  " . $row['last'] . " </td><td> " . $row['age'] . " </td><td> ". $row['education'] ." </td><td> <a href=deleteAuthor.php?author_id=" . $row['author_id']  ."> Delete Author</a>" . 
                            " </td><td> <a href=authorForm.php?author_id=" . $row['author_id']  . "> Update Author</a>". "</td></tr>";
                          
                      }
                  }
              ?>
              
              </tbody>
                </tbody>
            	
            </table>
            
            <p>
                <a href="authorForm.php">Add New Author</a>
            </p>
            
        </div> <!--container-->
        <?php include 'footer.php' ?>
    </body>
</html>