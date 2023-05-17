<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="wrapper">

<div class="top-header">
  <h1>📋 Inventory</h1>



<div class="functions"> <a href="index.php"><div class="add-button">
        Homepage
    </div></a>

</div>
</div>


<div class="main">


<table>


<tr>
<td><strong>Item</strong></td>
  <td><strong>Category</strong></td>
  <td><strong>Description</strong></td>
  <td><strong>Modify</strong></td>
  <td><strong>Delete</strong></td>
</tr>

<?php

if(isset($_POST["submit"])) {

   $search = $_POST["search"];


    $sql = "SELECT * FROM test_table WHERE item_name='$search' OR item_category='$search'";

    $res = mysqli_query($conn, $sql);

    $query_result = mysqli_num_rows($res);

    echo "There are ".$query_result." results, for the search term: ".$search; ?><br><br> <?php

    if($query_result > 0) {

        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>";
                echo $row["item_name"];
            echo "</td>";
            echo "<td>";
                echo $row["item_category"];
            echo "</td>";
        }

    } else {
        echo "There are no results matching your search";
    }


  //  header('location:index.php');

}



?>
</table>
</div>
</div>

</body>
</html>