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

<h1>➕ Add Item</h1>

<div class="functions"> <a href="index.php"><div class="add-button">
        Homepage
    </div></a>

</div>

</div>
<div class="main">

<tr>
<td><strong>#</strong></td> 
  <td><strong>Item</strong></td>
  <td><strong>Quantity</strong></td> 
  <td><strong>Category</strong></td>
  <td><strong>Description</strong></td>
  <td><strong>Modify</strong></td>
  <td><strong>Delete</strong></td>
</tr>

<form action="" method="POST">
        <input type="text" name="item_name" id="" placeholder="Item Name">
        <input type="number" min="0" name="item_quantity" id="" placeholder="Item Quantity">

        <select name="item_category" id="">
  <option value="Phone">Phone</option>
  <option value="Laptop">Laptop</option>
  <option value="TV">TV</option>

</select>

<input type="text" id="" name="item_description">

        <input type="submit" value="Add Item" name="submit" class="add-button">
    </form>
    </div>
    </div>
</body>
</html>

<?php

if(isset($_POST["submit"])) {
        
    $item_name = $_POST["item_name"];
    $item_category = $_POST["item_category"];
    $item_quantity = $_POST["item_quantity"];
    $item_description = $_POST["item_description"];

    $sql = "INSERT INTO test_table SET item_name = '$item_name', item_category = '$item_category', item_quantity = '$item_quantity', item_description='$item_description'";

    $res = mysqli_query($conn,$sql);

    echo "Your First name is: $item_name";

    header('location: index.php');

}


?>

