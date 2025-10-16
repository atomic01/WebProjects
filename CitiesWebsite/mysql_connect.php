<?php

DEFINE ('DB_USER','new_user');
DEFINE ('DB_PASSWORD','new_user');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','mydb');

$db_connect=@mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' . mysqli_connect_error()); 


?>