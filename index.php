<?php include("config.php");?>
<?php include("pagination.php");?>


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

  <div class="search">

  <form action="search.php" method="POST">
    <input type="text" name="search" id="" placeholder="Search">
    <input type="submit" value="Search" name="submit">
  </form>
  </div>

<div class="functions"> <a href="add-item.php"><div class="add-button">
        Add Items
    </div></a>
    
</div>

</div>

<div class="main">


<table>


<tr>
<td><strong> </strong></td> 
  <td><strong>Item</strong></td>
  <td><strong>Quantity</strong></td> 
  <td><strong>Category</strong></td>
  <td><strong>Description</strong></td>
  <td><strong>Modify</strong></td>
  <td><strong>Delete</strong></td>
</tr>
        <?php

        $start_number = 0;
        $rows_per_page = 5;

$sql = "SELECT * FROM test_table LIMIT $start_number,$rows_per_page";
$res = mysqli_query($conn, $sql);

$count= 1;
if(mysqli_num_rows($res) > 0) {

    while($row = mysqli_fetch_assoc($res)) {

        $id = $row["id"];


        echo "<tr>";
        echo "<td>";
        echo $count++;
        echo "</td>";
        echo "<td>";
        echo $row["item_name"];
        echo "</td>";
        echo "<td>";
            echo $row["item_quantity"];
        echo "</td>";

        echo "<td>";
          echo $row["item_category"];
          echo "</td>";

          echo "<td>";
          echo $row["item_description"];
          echo "</td>";
        
?>

        <td><a href="modify.php?id=<?php echo $id ?>"><button class="update">Update</button></a></td>
        <td><a href="delete-item.php?id=<?php echo $id ?>"><button class="delete">Delete</button></a></td>

        <?php
        echo "</tr>";
    }

} else {
    echo "0 results";
}




?>



</table>

</div>

</div>

<div class="pagination-container">
<div class="page-info">
  Showing 1 of <?php $pages; ?>
</div>

<div class="pagination">
  <!-- Go to the first page -->
<a href="?page-nr=1">First Page</a>

  <!-- Go to the first page -->

<?php 
  if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1) { ?>

    <a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Previous Page</a> 
    <?php
  } else {
    ?>
  <a>Previous</a>

<?php

  }
?>




<div class="page-numbers">

  <a href="">1</a>
  <a href="">2</a>
  <a href="">3</a>
  <a href="">4</a>
  <a href="">5</a>
  <a href="">6</a>

  <?php 
  if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1) { ?>

<a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">Next Page</a> 
<?php
} else {
?>
<a>Next</a>



}

  <a href="">Last Page</a>

</div>

</div>

</div>


</body>
</html>

