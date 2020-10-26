<pre>
<?php
    //Oppgave 2, gjort med string. Siden jeg måtte lagre hva vær verdi skal bli byttet til var det letere og lagre de nye verdiene i en annen array
    // for å se bruke array_replace for å endre verdiene i den orginale arrayen. 
echo "Matrisen før jeg endrer den </br>";
$arr = array("Superman","Batman","Wonder Woman","Green Lantern","Flash","Aquaman","Joker","Harley Quinn","Riddler","Bane");
    print_r($arr);

    echo "Matrisen etter at jeg har endret den </br>";
$arr2 = array("Iron Man","Spider-Man","Captain America","Ant-man","Captain Marvel","Hulk","Hawkeye","Blackwidow","Black Panter","Thor");
    print_r(array_replace($arr, $arr2));


// Et eksemple med en int for å vise For loopen. Jeg får en feil melding at jeg ikke har nok memory når jeg prøver å kjøre count inni forloop statmenten. Usiker på hvordan man ungår dette.
    echo "Et eksempel hvor jeg bruker tall isteden for string, og en for loop";
$arr3 = array(0,1,2,3,4,5,6,7,8,9);
    print_r($arr3);
    echo "</br>";
        $y = count($arr3);
    for($x = 0 ; $x < $y ; $x++){
        $arr3[$x] = 1;
        };

    print_r($arr3);

    $ny_index = 10;
        $arr3 = array_combine(range($ny_index, count($arr3) + ($ny_index-1)), array_values($arr3));
    print_r($arr3)
?>

</pre>