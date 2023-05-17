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
<td><strong>#</strong></td> 
  <td><strong>Item</strong></td>
  <td><strong>Quantity</strong></td> 
  <td><strong>Category</strong></td>
  <td><strong>Description</strong></td>
  <td><strong>Modify</strong></td>
  <td><strong>Delete</strong></td>
</tr>
        <?php

$sql = "SELECT * FROM test_table";
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



</body>
</html>

