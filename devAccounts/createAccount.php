<! DOCTYPE html >
<meta charset="utf-8" />
<meta name="viewport" content="width=devicewidth, initial sclae=1.0" />
<link rel="stylesheet" href="/styles.css" />


<html lang="en">
    <body>
        <nav class="topnav">
            <a href="/index.php">Home</a>
            <a href="/Tickets/createTicket.php">Create Ticket</a>
            <a href="/Tickets/existingTicket.php">Existing Tickets</a>
            <a href="/devAccounts/devLogin.php">Developer Login</a>
        </nav>

        <form action="insertAccount.php">
            <div class="box">
            <label>Username</label><br />    
            <input type="text" name="userName" placeholder="Username" required/>
            <br />
            <br />
            <label>Password</label><br />
            <input type="password" name="password" placeholder="Password" required/>
            <br />
            <br />
            <label>Re-Password</label><br />
            <input type="password" name="re-password" placeholder="Re-Password" required/>
            <br />
            <br />
            <button type="submit">Submit</button>
            </div>       
        </form>
    </body>
</html>