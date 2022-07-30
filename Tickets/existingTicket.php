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
            <a href="/devAccounts/devLogin.php">Developer Login</a>
        </nav>

        <h1>
            Existing Ticket
        </h1>

        <form>
            <div class="box">   
            <input type="text" name="Ticket" placeholder=" Ticket #" required/>
            <br />
            <br />
            <input type="text" name="email" placeholder=" email" required/>
            <br />
            <br />
            <button type="submit">Submit</button>
            <button onclick="location.href='/Tickets/createAccount.php'">Creat Account</button>
            </div>       
        </form>

    </body>

</html>


