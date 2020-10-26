<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Khai - Innlevering 4</title>
</head>
<body>

<h1>Khai - Innlevering 4</h1>

<h2>Oppgave 1: Arrays</h2>
<?php
$oppgave1 = array(
    0 => 'Khai',
    3 => 'Christer',
    5 => 'Arian',
    7 => 'Sven',
    8 => 'Andreas',
    15 => 'Victor'
);

//Lister opp alt innholdet i Arrayen.
print_r($oppgave1);

echo "<br>";

//Lister opp alt innholdet i Arrayen på en mer ordentlig måte.
foreach ($oppgave1 as $verdi => $navn) {
    echo "<br> $navn på plass $verdi.";
}
?>

<h2>Oppgave 2: Overwrite Arrays</h2>
<?php
$oppgave2 = array(
    1 => "Khai",
    2 => "Christer",
    3 => "Arian",
    4 => "Sven",
    5 => "Andreas",
    6 => "Victor",
    7 => "Ole",
    8 => "Dole",
    9 => "Doffen",
    10 => "Donald Duck"
);

//Nytt array.
$bytte1 = array(
    6 => "Kong Harald",
    7 => "Kronprins Haakon"
);

//Nytt array.
$bytte2 = array(
    8 => "Jacob (*Lowkey small Andy tilt*)"
);

//Med bruk av array_replace så bytter vi på hoved array der vi bytter på plass 6, 7 og 8.
$bytting = array_replace($oppgave2, $bytte1, $bytte2);
print_r($bytting);

echo "<br>";

//Del 2 av oppgave 2, endrer på hoved array der index 1 blir til 10.
foreach ($oppgave2 as $verdi => $navn) {
    $nyverdi[$verdi + 9] = $navn;
}
print_r($nyverdi);
?>

<h2>Oppgave 3: Liten Konkurranse</h2>
<?php
$oppgave3 = array(
    "Khai" => 0,
    "Christer" => 0,
    "Arian" => 0,
    "Andreas" => 0,
    "Sven" => 0,
    "Victor" => 0,
    "Ole" => 0,
    "Dole" => 0,
    "Doffen"  => 0,
    "Donald Duck" => 0,
);

//Lister opp deltagerne.
echo "Dagens deltagere: <br>";
foreach($oppgave3 as $key => $value) {
    echo "$key, ";
}

echo "<br>";


//Starter konkuransen.
$runde = 0;
while(count($oppgave3) >1 ) {
    $runde++;

    //Lister opp deltagerne og legge til en poeng.
    foreach($oppgave3 as $key => $value) {
        $deltakernummer = rand(1,50);
        $oppgave3[$key] = $deltakernummer;
    }

    //Endrer listen etter poeng.
    asort($oppgave3);

    echo "<br> Runde $runde: ";

    //Lister opp deltagerne etter poeng.
    foreach($oppgave3 as $navn => $rundepoeng) {
        echo $navn , ": " , $rundepoeng , " poeng, ";
    }

    echo "<br>";
    //Fjerner deltageren med lavest poeng.
    $fjerner = array_splice($oppgave3, 0, 1);

    //Lister opp deltageren med lavest poeng.
    foreach($fjerner as $navn => $rundepoeng) {
        echo  "Den som ryker ut er   " . $navn . " med  " . $rundepoeng . " poeng. ";
    }

    echo "<br>";
}

echo "<br>";

//Lister opp vinneren når det er bare 1 deltager igjen i arrayen.
foreach($oppgave3 as $navn => $rundepoeng) {
    echo  " Vinneren av konkuransen er " , $navn , " med  " , $rundepoeng , " poeng.";
}
?>

<h2>Oppgave 4: Registrering av nytt medlem</h2>

<form action="index.php" method="post">
    Fornavn: <input type="text" name="fname"><br>
    Etternavn: <input type="text" name="lname"><br>
    Adresse: <input type="text" name="address"><br>
    Postnummer: <input type="number" name="zipcode"><br>
    By: <input type="text" name="city"><br>
    Mobilnummer: <input type="number" name="tlf"><br>
    E-post: <input type="email" name="email"><br>
    Fødselsdato: <input type="date" name="bdate"><br>
    Kjønn:
        <input type="radio" id="male" value="Mann" name="gender">
        <label for="male">Mann</label>
        <input type="radio" id="female" value="Dame" name="gender">
        <label for="female">Dame</label>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$zipcode = $_POST['zipcode'];
$city = $_POST['city'];
$tlf = $_POST['tlf'];
$email = $_POST['email'];
$bdate = $_POST['bdate'];
$gender = $_POST['gender'];

//Hente frem real time dato. (Blir brukt for å registrere registrerings dato på medlemen)
date_default_timezone_set("Europe/Oslo");
$date = date("d.m.Y");

//If setninger som går gjennom etter å ha trykket på submit.
if (isset($_POST['submit'])) {
    if (empty($fname)) {
        echo "Du har glemt å oppgi fornavnet ditt. <br>";
    }
    if (empty($lname)) {
        echo "Du har glemt å oppgi etternavnet ditt. <br>";
    }
    if (empty($address)) {
        echo "Du har glemt å oppgi adressen din. <br>";
    }
    if (empty($zipcode)) {
        echo "Du har glemt å oppgi postnummeret ditt. <br>";
    }
    if (empty($city)) {
        echo "Du har glemt å oppgi byen din. <br>";
    }
    if (empty($tlf)) {
        echo "Du har glemt å oppgi telefonnummeret ditt. <br>";
    }
    if (empty($email)) {
        echo "Du har glemt å oppgi e-post adressen din. <br>";
    }
    if (empty($bdate)) {
        echo "Du har glemt å oppgi fødselsdatoen din. <br>";
    }
    if (empty($gender)) {
        echo "Du har glemt å oppgi kjønnet ditt. <br>";
    }
    if(empty($fname) || empty($lname) || empty($address) || empty($zipcode) || empty($city) || empty($tlf) || empty($email) || empty($bdate) || empty($gender)) {
    }
    else {
        echo "<br>";

        //Henter data fra from og legger den i en array.
        $medlem=array(
            "Fornavn" => $fname,
            "Etternavn" => $lname,
            "Adresse" => $address,
            "Postnummer" => $zipcode,
            "By" => $city,
            "Tlf" => $tlf,
            "E-post" => $email,
            "Fødelsdato" => $bdate,
            "Kjønn" => $gender,
            "Medlemsdato" => $date
        );

        //Lister opp registrert medlem.
        echo "<b>Registrert medlem:</b><br>";

        foreach ($medlem as $key => $nymedlem) {
            echo "$key: $nymedlem<br>";
        }
    }
}
?>

<h2>Oppgave 5: Endring av medlem</h2>
<?php
$fname1 = $_POST['fname1'];
$lname1 = $_POST['lname1'];
$address1 = $_POST['address1'];
$zipcode1 = $_POST['zipcode1'];
$city1 = $_POST['city1'];
$tlf1 = $_POST['tlf1'];
$email1 = $_POST['email1'];
$bdate1 = $_POST['bdate1'];
$gender1 = $_POST['gender1'];

//Lager en ferdig opprettet array med dummy data.
$oppgave5=array(
    "Fornavn" => "Khai",
    "Etternavn" => "Nguyen",
    "Adresse" => "Markensgate 32",
    "Postnummer" => 4610,
    "By" => "Kristiansand",
    "Tlf" => 12345678,
    "E-post" => "khai@nguyen.no",
    "Fødelsdato" => "1999-10-25",
    "Kjønn" => "Mann",
    "Medlemsdato" => "25.09.2020"
);

//En If setning som går gjennom etter man har trykkey på submit for manglende felt.
if (isset($_POST['submit1'])) {
    if (empty($fname1)) {
        echo "Du har glemt å oppgi fornavnet ditt. <br>";
    }
    if (empty($lname1)) {
        echo "Du har glemt å oppgi etternavnet ditt. <br>";
    }
    if (empty($address1)) {
        echo "Du har glemt å oppgi adressen din. <br>";
    }
    if (empty($zipcode1)) {
        echo "Du har glemt å oppgi postnummeret ditt. <br>";
    }
    if (empty($city1)) {
        echo "Du har glemt å oppgi byen din. <br>";
    }
    if (empty($tlf1)) {
        echo "Du har glemt å oppgi telefonnummeret ditt. <br>";
    }
    if (empty($email1)) {
        echo "Du har glemt å oppgi e-post adressen din. <br>";
    }
    if (empty($bdate1)) {
        echo "Du har glemt å oppgi fødselsdatoen din. <br>";
    }
    if (empty($gender1)) {
        echo "Du har glemt å oppgi kjønnet ditt <br>";
    }
    if(empty($fname1) || empty($lname1) || empty($address1) || empty($zipcode1) || empty($city1) || empty($tlf1) || empty($email1) || empty($bdate1) || empty($gender1)) {
    }
    else {
        //Legger inn ny info for felter som er allerede er fra før og det nye som skal endres på.
        $endreoppgave5 = array(
            'Fornavn' => $fname1,
            'Etternavn' => $lname1,
            'Adresse' => $address1,
            'Postnummer' => $zipcode1,
            'By' => $city1,
            'Tlf' => $tlf1,
            'E-post' => $email1,
            'Fødelsdato' => $bdate1,
            'Kjønn' => $gender1
        );
        //Endrer den eksisterende array listen
        $oppgave5 = array_replace($oppgave5, $endreoppgave5);

        //Lister opp den endrede arrayen.
        echo "<h3>Medleminfo:</h3>";

        foreach ($oppgave5 as $key1 => $endremedlem) {
            echo "$key1: $endremedlem<br>";
        }
    }
}
?>
<br>
<form action="index.php" method="post">
    Fornavn: <input type="text" value="<?php print_r($oppgave5["Fornavn"]); ?>" name="fname1"><br>
    Etternavn: <input type="text" value="<?php print_r($oppgave5["Etternavn"]); ?>" name="lname1"><br>
    Adresse: <input type="text" value="<?php print_r($oppgave5["Adresse"]); ?>" name="address1"><br>
    Postnummer: <input type="number"  value="<?php print_r($oppgave5["Postnummer"]); ?>"name="zipcode1"><br>
    By: <input type="text" value="<?php print_r($oppgave5["By"]); ?>" name="city1"><br>
    Mobilnummer: <input  value="<?php print_r($oppgave5["Tlf"]); ?>" type="number" name="tlf1"><br>
    E-post: <input type="email"  value="<?php print_r($oppgave5["E-post"]); ?>"name="email1"><br>
    Fødselsdato: <input type="date"  value="<?php print_r($oppgave5["Fødelsdato"]); ?>"name="bdate1"><br>
    Kjønn:
    <?php
    if ($oppgave5["Kjønn"] == "Mann") {
        ?>
        <input type="radio" id="male" value="Mann" name="gender1" checked>
        <label for="male">Mann</label>
        <input type="radio" id="female" value="Dame" name="gender1">
        <label for="female">Dame</label>
        <br>
        <?php
    } else {
        ?>
        <input type="radio" id="male" value="Mann" name="gender1">
        <label for="male">Mann</label>
        <input type="radio" id="female" value="Dame" name="gender1" checked>
        <label for="female">Dame</label>
        <br>
        <?php
    }
    ?>
    <input type="submit" name="submit1" value="Submit">
</form>
</body>
</html>