<?php
 $db = mysqli_connect('localhost','root','','library_checkout')
 or die('Error connecting to MySQL server.');
?>
 

<html>
 <head>
     <title> DB using PHP</title>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>
     <form action=submit>
     <input type="text" name="searchbox" placeholder="Search by title" required><br>
     </form>
 <?php 
 $query = "SELECT * FROM sheet1";
 mysqli_query($db, $query) or die('Error querying database');

 $result = mysqli_query($db, $query);
 $row = mysqli_fetch_array($result);

 while ($row = mysqli_fetch_array($result)) {
    echo $row['author'] . ' ' . $row['title'] . ': ' . $row['category'] . ' ' . $row['ISBN'] .'<br />';
 }
 mysqli_close($db);
 ?>
</body>
</html>