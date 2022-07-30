<html>

<head>
    <h1>
        Bug Tracker
        <link rel="stylesheet" href="styles.css" />
    </h1>
</head>

<body>
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