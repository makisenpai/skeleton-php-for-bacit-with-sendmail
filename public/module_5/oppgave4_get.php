<?php

$bdate = $_GET['bdate'];

$bday = new datetime($bdate); 
$tday = new datetime(date("d.m.y"));


$diff = $tday->diff($bday);

printf("You are %d years, %d months, %d days old.", $diff->y, $diff->m, $diff->d);

?>