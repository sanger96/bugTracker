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
        <a href="/Tickets/devLogin.php">Developer Login</a>
    </nav>

    <h1>
        Bug Tracker
    </h1>

    <div class="text-center">
        
        <! Create New Ticket >
        <button onclick="location.href ='/Tickets/createTicket.php'">Create New Ticket</button>
        <br />
        <br />
        
        <! Existing Ticket >
        <button onclick="location.href ='/Tickets/existingTicket.php'">Open Existing Ticket</button>
        <br />
        <br />
        
        <! Developer Login >
        <button onclick="location.href ='/Tickets/devLogin.php'">Developer Login</button>

    </div>
</body>

<br />
<br />
<br />
<br />





<?php

$host = "localhost";
$username = "root";
$password = "usbw";
$database = "bugtracker";

//create connection
$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}

//host info
echo $mysqli->host_info . "\n";

//creating a variable $sql (is sql statment) to select from column email an password from table accounts
$sql = "SELECT email, password FROM accounts";
//creating a variable $result (is sql statment) is results from searching through $msqli created in 23
$result = $mysqli->query($sql);


//displays table
if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()){
        echo "<br>" . "email: " . $row["email"] . " , Password: " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT priority, description, picture, ticket FROM bugs";
//creating a variable $result (is sql statment) is results from searching through $msqli created in 23
$result = $mysqli->query($sql);


//displays table
if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()){
        echo "<br>" . "priority: " . $row["priority"] . " , Issue Description: " . $row["description"] . " , Temp Pic: " . $row["picture"] . " , Ticket Number: " . $row["ticket"] . "<br>";
    }
} else {
    echo "0 results";
}
$mysqli->close();

?>



</html>