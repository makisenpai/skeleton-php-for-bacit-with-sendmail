<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/css/style.css">
<title>Module 2</title>
</head>
    <?php
        $medlemsnummer = 001;
        $fornavn = "Martin";
        $etternavn = "stenberg";
        $adresse = "Fakestree 20";
        $mobilnummer = 420696940;
        $epost = "martin@test.no";
        $fdato = "16.08.1998";
        $kjønn = "Mann";
        $medlemsdato = "31.08.2020";
        $status = "Betalt";
        $interesser = "PHP";

        $kurs = "php 101, u wanna be a web programer omegalul"

    ?>
<div class="Box overflow">    
<body>
    <h2>Profil - oppgave 5</h2>
    <table>
        <tr>
            <th>Medlemsnummer</th>
            <th>Fornavn</th>
            <th>Etternavn</th>
            <th>Adresse</th>
            <th>Mobilnummer</th>
            <th>E-post</th>
            <th>Fødselsdato</th>
            <th>Kjønn</th>
            <th>Medlemsdato</th>
            <th>Kontigentstatus</th>
        </tr>
        <?php
        echo "<td>$medlemsnummer</td>";
        echo "<td>$fornavn</td>";
        echo "<td>$etternavn</td>";
        echo "<td>$adresse</td>";
        echo "<td>$mobilnummer</td>";
        echo "<td>$epost</td>";
        echo "<td>$fdato</td>";
        echo "<td>$kjønn</td>";
        echo "<td>$medlemsdato</td>";
        echo "<td>$status</td>";
        ?>
    </table>
</div>
</body>
<div class="Box">

    <h2> Intereser</h2>
    <?php
    echo "$interesser";
    ?>
    
    <h2> Mine kurs</h2>
    <?php
    echo "$kurs";
    ?>
    <br />
    <br />
    <button class="btn"><a href="startside.php">Tilbake</a></button> 
</div>
</html>