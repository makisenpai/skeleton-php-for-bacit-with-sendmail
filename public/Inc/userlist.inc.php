<?php 
include "config.php";

if (mysqli_connect_errno() ) {
    exit('Failed to connect to database: ' . mysqli_connect_error());
}
$i = "null";

if(isset($_GET["sort"])){
$i = $_GET["sort"];
};
//Endrer SQL statmenten basert på $i, 
switch($i) {
    case "null";
        $sql = "SELECT * FROM users";
        break;
    case "payment":
        $sql = "SELECT * FROM users ORDER BY user_payment_status";
        break;
    case "dob":
        $sql = "SELECT * FROM users ORDER BY user_dob ASC";
        break;
}

$stmt = $con->query($sql);

//HTML kode 
echo "<br>";
echo "<h1>Brukerliste</h1>";
echo "<table>";
echo "<tr>";
echo "  <th>Brukernavn</th>";
echo "  <th>Navn</th>";
echo "  <th>Fødsels dato</th>";
echo "</tr>";

if($stmt->num_rows>0){
    
    while($row=$stmt->fetch_assoc()) {

        echo "<tr>";
        echo "<td>" . $row["user_username"]. "</td> ";
        echo "<td>" . $row["user_first"]. " " . $row["user_last"] . "</td>";
        echo "<td>" . $row["user_dob"]. "</td>";
        echo "<td>" . $row["user_payment_status"]. "</td>";
        echo "</tr>";
    }
}else{
    echo "No users in database";
}
echo "</table>";
$stmt->close();
?>
