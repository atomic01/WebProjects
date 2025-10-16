<?php

DEFINE ('DB_USER','epiz_24714210');
DEFINE ('DB_PASSWORD','CpjlwGEqUR');
DEFINE ('DB_HOST','sql205.epizy.com');
DEFINE ('DB_NAME','epiz_24714210_todolistappdb');

$db_connect=@mysqli_connect(DB_HOST, DB_USER,DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' . mysqli_connect_error()); 


?>