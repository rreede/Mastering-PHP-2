<?php
/*
// Variables

$name = "Rene";

echo "Hello World!";

print 'Hello Joe\'s World!';

echo $name;

$x = 1;

$y = &$x;

$x = 43;

echo $y;

echo 'Hello $name';

echo "Hello $name";

echo "Hello" . $name;
?>


<!-- PHP inside html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>


<?php
// Comment 1 
#  Comment 2 
/* Multirow
 Comment 3 */

 /**
  *  Doc Blocks
  */

?>
    
    <?= "Inside Html!" ?>
</h1>

<?= "Hello World" ?>
    
</body>
</html>



<?php

// Constants

define('STATUS_PAID','paid');

echo STATUS_PAID;

$firstName = "Rene";
$firstName = "Raigo";

echo $firstName;

echo defined("STATUS_PAID");

const STATUS_UNPAID = "unpaid";

echo STATUS_UNPAID;

echo PHP_VERSION;

echo __LINE__;

// Variable Variables

$foo = "bar";

$$foo = "baz";

echo $bar;



?>
