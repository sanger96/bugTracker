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
</html>