<?php

//Eksempel på hvordan man lager en ikke assosiert matrise
$array = array(0,3,5,7,8,15);

echo "<pre>";
    print_r($array);
echo "</pre>";
//En for loop som looper gjennom matrisen så lenge $x er mindre en antal obecjter i matrisen.

for($x = 0 ; $x <= count($array) ; $x++){
    echo $array[$x], "<br>";
}
?>
