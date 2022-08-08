<! DOCTYPE html >
<meta charset="utf-8" />
<meta name="viewport" content="width=devicewidth, initial sclae=1.0" />
<link rel="stylesheet" href="/styles.css" />


<html lang="en">

    <body>
        <header>
            <nav class="topnav">
                <a href="/index.php">Home</a>
                <a href="/Tickets/createTicket.php">Create Ticket</a>
                <a href="/Tickets/existingTicket.php">Existing Tickets</a>
                <a href="/devAccounts/devLogin.php">Developer Login</a>
            </nav>
        </header>

        <br />

        <?php
            //currently displays all previous tickets, needs just last ticekt
            //opens database
            include "connect.php";
            $search = $_GET["search"];

            //title
            echo "<h1>Search Results for $search <br /> <br /> <br /> <br /> <br /> <br />";

            //searching through issue
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

            //searching through email
            $sql = "SELECT priority, issue, email FROM tickets WHERE email LIKE '%$search%'";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                echo "<table><tr><th>priority</th><th>issue</th><th>email</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["priority"]."</td><td>".$row["issue"]."</td><td>".$row["email"]."</td></tr>";
                }
                echo "</table>";
            }

            //searching through priority
            $sql = "SELECT priority, issue, email FROM tickets WHERE priority LIKE '%$search%'";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                echo "<table><tr><th>priority</th><th>issue</th><th>email</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["priority"]."</td><td>".$row["issue"]."</td><td>".$row["email"]."</td></tr>";
                }
                echo "</table>";
            }

            if ($result->num_rows == 0){
                echo "No results.";
            }

            //closes database
            $mysqli->close();
        ?>

    </body>

</html>



