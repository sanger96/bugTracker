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
        Create Ticket
    </h1>

    <form action="insertTicket.php" style="text-align:center; font-size:medium">
        <label style=" color:black ; font-size:18px " for="priority">Set a level of priority</label>     
        
        <! Drop-down box to set priority level of issue >
        <select name="priority">
            <option style=" background-color:lightgoldenrodyellow" value="1">1 - Minor Inconvenience</option>
            <option style=" background-color:gold" value="2">2 - Inconvenience</option>
            <option style=" background-color:goldenrod" value="3">3 - Slowing down work flow</option>
            <option style=" background-color:lightcoral" value="4">4 - Barely able to work</option>
            <option style=" background-color:red" value="5">5 - Stopped working pending fix</option>
        </select>
        <br />
        <br />
        
        <! input box for issues >
        <textarea name="issue" placeholder="Please describe your issue here." required></textarea>
        <br />

        <! input area for email> 
        <input name="email" style="width:auto" type = "email" placeholder = "Email@EmailClient.com" required/>

        <! Sumbit button >
        <button type = "submit">Submit</button>

        <! Ticket # return value upon submit >
        <input style="border-radius:10px; background-color:mediumaquamarine" name="ticket" placeholder=" Ticket # Return" readonly="readonly"/>
        <br />
        <br />

        <! Existing Ticket button >
        <a href="/Tickets/existingTicket.php">Click Here If You Have An Existing Ticket</a>

    </form>
</body>
</html>