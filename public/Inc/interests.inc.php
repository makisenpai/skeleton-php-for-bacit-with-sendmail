<?php 
include "config.php";

if (mysqli_connect_errno() ) {
    exit('Failed to connect to database: ' . mysqli_connect_error());
}

$inter = $_GET["sort"];
if(isset($inter)){
$sql = "SELECT * FROM interests_bridge
    join interests on interests.interest_ID = interests_bridge.interest_ID
    join users on users.user_ID = interests_bridge.user_ID
    where interests.interest_info = '$inter'";

}else{
$sql = "SELECT * FROM interests_bridge
        join interests on interests.interest_ID = interests_bridge.interest_ID
        join users on users.user_ID = interests_bridge.user_ID";
}
//Setter opp statmenten med $sql som script, og $con som tilkobling
$stmt = $con->query($sql);

//HTML kode
echo "<br>";
echo "<h1>Brukerliste</h1>";
echo "<table>";
echo "<tr>";
echo "  <th>Brukernavn</th>";
echo "  <th>Navn</th>";
echo "  <th>Interese</th>";
echo "</tr>";

if($stmt->num_rows>0){
    
    while($row=$stmt->fetch_assoc()) {
        
        echo "<tr>";
        echo "<td>" . $row["user_username"]. "</td> ";
        echo "<td>" . $row["user_first"]. " " . $row["user_last"] . "</td>";
        echo "<td>" . $row["interest_info"] ."</td>";
        echo "</tr>";
    }
}else{
    echo "No users in database";
}
echo "</table>";

?>
