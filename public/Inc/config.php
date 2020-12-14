<?php
$DATABASE_HOST = 'db';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'BSBACIT2020';
$DATABASE_NAME = 'phplogin';

$con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno() ) {
    exit('Failed to connect to database: ' . mysqli_connect_error());
}
?>