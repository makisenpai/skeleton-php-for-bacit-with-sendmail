<?php

$deltagere = array(
    "Martin" => 0,
    "Marcus" => 0,
    "Julian" => 0,
    "Tuva" => 0,
    "Sven" => 0,
    "Sindre" => 0,
    "Runar" => 0,
    "Rosa" => 0,
    "Knut" => 0,
    "Thor" => 0,
);
$runde = 0;
while(count($deltagere) > 1){
    $runde = $runde+1;
        foreach($deltagere as &$value){
            $value = rand(1,50);
        }
        arsort($deltagere, SORT_NUMERIC); end($deltagere);
            echo "Runde: $runde <br>";
        foreach($deltagere as $key => $value ){
            echo "$key: $value poeng <br>";
        }
            echo "<br>";
        $navn = key($deltagere);
            echo "Oh no $navn var siste, YEET <br><br>";
        array_pop($deltagere);    
    }

    $vinner = key($deltagere);    
echo "OMG $vinner VAAANT!!!"

?>