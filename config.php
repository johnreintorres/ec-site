<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','ecommerce-wp');

$link = mysqli_connect('localhost','root','','ecommerce-wp');

if ($link===false)
die("ERROR: Could not connect. " . mysqli_connect_error());

?>