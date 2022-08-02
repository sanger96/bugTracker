<! DOCTYPE html >
<meta charset="utf-8" />
<meta name="viewport" content="width=devicewidth, initial sclae=1.0" />
<link rel="stylesheet" href="/styles.css" />


<html lang="en">
    <body>

        <nav class="topnav">
            <a href="/index.php">Home</a>
            <a href="/Tickets/createTicket.php">Create Ticket</a>
            <a href="/Tickets/existingTicket.php">Existing Ticket</a>
            <<a href="/devAccounts/devLogin.php">Developer Login</a>
        </nav>

        <h1>
            Ticket Created
        </h1>

        <br />

        <?php
        //opens database
        include "connect.php";

        $sql = "SELECT priority, issue, email, ticket FROM tickets";
        $result = $mysqli->query($sql);
       
        if ($result->num_rows > 0) {
            echo "<table><tr><th>priority</th><th>issue</th><th>email</th><th>ticket</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["priority"]."</td><td>".$row["issue"]."</td><td>".$row["email"]."</td><td>".$row["ticket"]."</td></tr>";
            }
            echo "</table>";
        }
        //closes database
        $mysqli->close();
        ?>

    </body>
</html>