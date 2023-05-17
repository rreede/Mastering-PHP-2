<?php include("config.php");?>

<?php

$id = $_GET["id"];

    $sql = "SELECT * FROM test_table WHERE id=$id";

    $res = mysqli_query($conn,$sql);

    if($res == TRUE) {
        $count = mysqli_num_rows($res);

        if($count > 0) {
            $row = mysqli_fetch_assoc($res);

            $item_name = $row["item_name"];
            $item_quantity = $row["item_quantity"];
            $item_category = $row["item_category"];
            $item_description = $row["item_description"];



        }
    }





?>



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

<h1>⚙️ Modify Entry</h1>

</div>
<div class="main">
<form action="" method="POST">
        <input type="text" name="item_name" id="" placeholder="Item Name" value="<?php echo $item_name;?>">
        <input type="number" value="<?php echo $item_quantity;?>" min="0" name="item_quantity" id="" placeholder="Item Quantity">
        <select name="item_category" id="cars">
  <option value="Phone">Phone</option>
  <option value="Laptop">Laptop</option>
  <option value="TV">TV</option>

</select>

<input type="text" name="item_description" id="" value="<?php echo $item_description;?>">

        <input type="submit" value="Update Item" name="submit">
    </form>
    </div>
    </div>
</body>
</html>



<?php

$id = $_GET["id"];

if(isset($_POST["submit"])) {
        
    $item_name = $_POST["item_name"];
    $item_quantity = $_POST["item_quantity"];
    $item_category = $_POST["item_category"];
    $item_description = $row["item_description"];

    $sql = "UPDATE test_table SET item_name = '$item_name', item_category = '$item_category', item_quantity='$item_quantity', item_description='$item_description' WHERE id=$id";

    $res = mysqli_query($conn,$sql);

    echo "Your First name is: $item_name";

    header('location: index.php');

}
?>