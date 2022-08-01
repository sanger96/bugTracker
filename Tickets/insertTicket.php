<?php
//opens database
include "connect.php";

//get values from addressbar
$priority = $_GET["priority"];
$issue = $_GET["issue"];
$email = $_GET["email"];

/* testing input
echo "Trying to create new ticket:
<br /> $priority <br />
<br /> $issue <br />
<br /> $email <br />";
 */

//inserting into table
$sql = "INSERT INTO tickets (priority, issue, email)
VALUES ('$priority', '$issue', '$email')";
$result = $mysqli->query($sql);

//redirects
header('Location:newTicket.php');

$mysqli->close();
?>