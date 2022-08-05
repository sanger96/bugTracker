<?php 
    //currently displays all previous tickets, needs just last ticekt
    //opens database
    include "connect.php";
    $search = $_GET["search"];

    $sql = "SELECT priority, issue, email FROM tickets WHERE issue LIKE '%$search%'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>priority</th><th>issue</th><th>email</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["priority"]."</td><td>".$row["issue"]."</td><td>".$row["email"]."</td></tr>";
        }
        echo "</table>";
    }
    //closes database
    $mysqli->close();
?>