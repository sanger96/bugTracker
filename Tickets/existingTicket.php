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
        <h1>Existing Tickets</h1>
        <br />
        <br />

        <! search existing tickets >
        <form action="searchTicket.php">
            <div style="text-align:center">
            <label style="font-size:24px">Search For ticket :</label>
            <input type="text" name="search"/>
            <button type="submit">Submit</button>
            </div>
        </form>

        <br />
        <br />

        <?php
        //currently displays all previous tickets, needs just last ticekt
        //opens database
        include "connect.php";

        $sql = "SELECT priority, issue, email FROM tickets";
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

    </body>

</html>


