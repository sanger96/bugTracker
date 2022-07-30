<! DOCTYPE html >
<meta charset="utf-8" />
<meta name="viewport" content="width=devicewidth, initial sclae=1.0" />
<link rel="stylesheet" href="styles.css" />

<html lang="en">

<body>

    <nav class="topnav">
        <a style="color:white;" href="index">Home</a>
        <a style="color:white;" href="#">New Ticket</a>
        <a style="color:white;" href="#">Existing Ticket</a>
        <a style="color:white;"href="#">Developer Login</a>
    </nav>

    <h1>
        Bug Tracker
    </h1>

    <div class="text-center">
        
        <! Create New Ticket >
        <button onclick="location.href ='createTicket'">Create New Ticket</button>
        <br />
        <br />
        <br />
        
        <! Existing Ticket >
        <button onclick="location.href ='existingTicket'">Open Existing Ticket</button>
        <br />
        <br />
        <br />
        
        <! Developer Login >
        <button onclick="location.href ='devLogin'">Developer Login</button>

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