<?php include("config.php");?>

<?php

if(isset($_GET["id"])) {

    $id = $_GET["id"];

    echo $id;

$sql = "DELETE FROM test_table WHERE id=$id ";
$res = mysqli_query($conn, $sql);

header('location: index.php');


}

?>