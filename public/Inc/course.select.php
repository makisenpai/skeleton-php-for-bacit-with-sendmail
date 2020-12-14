<?php 
include "config.php";

$sql = "SELECT * FROM courses";

        //Null
        $stmt = $con->query($sql);

        echo "<br>";
        echo "<h1>Aktiviteter</h1>";
        echo "<table>";
        echo "<tr>";
        echo "  <th>Navn</th>";
        echo "  <th>Info</th>";
        echo "  <th>Start dato</th>";
        echo "  <th>Slut dato</th>";
        echo "</tr>";

        if($stmt->num_rows>0){
            
            while($row=$stmt->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["course_name"] . "</td>";
                echo "<td>" . $row["course_info"] . "</td>";
                echo "<td>" . $row["course_start_date"] . "</td>";
                echo "<td>" . $row["course_end_date"] . "</td>";
            }
        }else{
            echo "No courses in database";
        };


?>