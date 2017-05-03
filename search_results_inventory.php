<?php 
    $db = mysqli_connect('localhost', 'root','','library_checkout') or die ('Error connecting to MySQL');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
</head>
    <body>
        <h3> Search Results</h3>
    <?php
    $input = $_GET['input'];
    //$search_type = $_GET["search_type"];
    $min_length=3;
    //echo $search_type;
    if (strlen($input) >= $min_length){
        $input = htmlspecialchars($input);
        //$input = mysqli_real_escape_string($input); 
        $search_type = $_GET['search_type'];
        $query = "SELECT * FROM sheet1 WHERE (".$search_type." LIKE '%".$input."%')";
        mysqli_query($db, $query) or die('Error querying database');

 $result = mysqli_query($db, $query);
 $no_of_rec = mysqli_num_rows ($result);
 $row = mysqli_fetch_array($result);
  echo $no_of_rec.' results found';

 while ($row = mysqli_fetch_array($result)) {
    ?>
    <div>
        <h4><?php echo $row['title']; ?></h4>
        <div><?php echo $row['author']; ?></div>
    </div>
    <?php
    }
        
    }
    else{
        echo 'Search string is very small';
    }
    ?>
    </body>
</html>
