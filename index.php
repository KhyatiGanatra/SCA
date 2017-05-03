<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
    .tftable {
        font-size:       12px;
        color:           #333333;
        width:           20%;
        margin-right: : 20px;
    }


    .tftable td {
        font-size:    12px;
        border-width: 1px;
        padding:      8px;
        border-style: solid;
    }

    .tftable tr:hover {
        background-color: blanchedalmond;
    }
        .theading:{
            padding: 10px 500px 5 10;
        }
</style>
</head>
<body>
 <form action="search.php" method="get" id="searchform">
     <div>
     <input type="text" placeholder="Search by ..." name="search">
     <button type="submit">Search</button>
    <input type="radio" name="search_type" value = 'title' checked>Title
    <input type="radio" name="search_type" value = 'author' >Author
    </div>
     <h3> Browse:</h3>
     <div>
     <table class="tftable" style = "float:left" border = '1';>
         <tr><td><h4 class='theading'>Category</h4></td></tr>
         <tr><td>Arts/Entertainment</td></tr>
         <tr><td>Cultural Theory</td></tr>
         <tr><td>Education</td></tr>
         <tr><td>Film and Media Studies</td></tr>
         <tr><td>Gender Studies</td></tr>
         <tr><td>Humanities</td></tr>
         <tr><td>Literature</td></tr>
         <tr><td>Science</td></tr>
         <tr><td>Social Sciences</td></tr>
         <tr><td>Technology</td></tr>
      </table>
     <table class="tftable" style='float:middle;'>
         <tr><td><h4>Sub Category</h4></td></tr>
         <tr><td></td></tr>
         
         
    </table>
    </div>
   </form>
</body>
</html>