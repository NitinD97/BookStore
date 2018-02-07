<?php
DEFINE('DB_USER','IP');
DEFINE('DB_PASSWORD','Dhiman@123');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','test');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR dies('Could not connect to MySql: ' .
    mysqli_connect_error());

?>