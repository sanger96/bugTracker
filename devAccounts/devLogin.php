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

    <h1>Developer Login</h1>
    
    <div style="text-align:center; font-size:18px">
        <p>To preview a demo of an existing account use the following login:</p>
        <p>Username: <strong>demo</strong> </p>
        <p>Password: <strong>password</strong> </p>
    </div>

    <form>
        <div class="box">
        <label>Username</label><br />
        <input type="text" name="userName" placeholder=" Username" required/>
        <br />
        <br />
        <label>Password</label><br />
        <input type="text" name="password" placeholder=" Password" required/>
        <br />
        <br />
        <button type="submit">Submit</button>
        <button onclick="location.href='/devAccounts/createAccount.php'">Creat Account</button>
        <br />
        <br />
        <a href="/Tickets/forgotTicket.php">Forgot Password</a>
        </div>       
    </form>

</body>

</html>