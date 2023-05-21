<?php include("config.php");?>


<?php
// Get total of rows

$records = "SELECT * FROM test_table";


$res = mysqli_query($conn,$records);

$nr_of_rows = mysqli_num_rows($res);

//calculating the nr of pages

$pages = ceil($nr_of_rows / $rows_per_page);

if(isset($_GET['page-nr'])) {
  $page = $_GET['page-nr'] - 1;

  $start = $page * $rows_per_page;

}

?>