<?php 
include_once "../inc/config.php";
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/style.css">
<title>Interesser</title>
</head>
    <body>
        <div class="Box">
            <?php 
                include "../inc/header.inc.php";
                
                include "../inc/interests.inc.php";
            ?>
            <br>
            <form action="interests.site.php" method="get">
            <select for="sort" name="sort" required>
                <option value="null"></option>
                <?php 
                
                $i_array = array();

                $sql = "SELECT * FROM interests";

                $stmt = $con->query($sql);

                if($stmt->num_rows>0){

                    while($row=$stmt->fetch_assoc()){

                        echo "<option value=". $row["interest_info"] . ">" . $row["interest_info"] . "</option>";
                        
                    }
                }
                
                ?>
            </select>
            <input type="submit" name="sorter"/>
            </form>
        </div>
    </body>
</html>