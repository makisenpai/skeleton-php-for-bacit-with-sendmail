<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>Maki - Innlevering 2</title>
</head>
<body>
    <div class="Box">
    <h2>Oppgave 1</h2>
    <?php
        $navn ="Martin";
        $alder = 22;
    ?>
    </div>
    <div class="Box">
    <table>
        <tr>
            <th>Navn</th>
            <th>Alder</th>
        </tr>
        <td><?php echo $navn ?></td>
        <td><?php echo $alder ?></td>
    </table>
    
    <p>Nummerert liste: </p>
    <ol>
        <li><?php echo $navn," ", $alder ?></li>
        <li><?php echo $navn," ", $alder ?></li>
        <li><?php echo $navn," ", $alder ?></li>
        <li><?php echo $navn," ", $alder ?></li>
    </ol>

    <p>Punktmerket liste:</p>
    <ul>
        <li><?php echo $navn," ", $alder ?></li>
        <li><?php echo $navn," ", $alder ?></li>
        <li><?php echo $navn," ", $alder ?></li>
        <li><?php echo $navn," ", $alder ?></li>
    </ul>
    <p>Paragraf:</p>
    <p>Hei jeg heter <?php echo $navn ?> og er <?php echo $alder ?> år gammle </p>

    <button class="btn"><a href="startside.php">Tilbake</a></button>    
    </div>
    
</body>
</html>