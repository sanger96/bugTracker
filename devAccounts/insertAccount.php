<?php
//opens database
include "connect.php";

//get values from addressbar
$userName = $_GET["userName"];
$password1 = $_GET["password"];
$password2 = $_GET["re-password"];

/* testing input
echo "Trying to create new ticket:
<br /> $priority <br />
<br /> $issue <br />
<br /> $email <br />";
 */


if($password1 == $password2){
    //inserting into table
    $sql = "INSERT INTO accounts (userName, password)
    VALUES ('$userName', '$password1')";
    $result = $mysqli->query($sql);
    //redirects
    header('Location:devLogin.php');

}else{
    echo '<script>alert("passwords do not match")</script>';
}



$mysqli->close();
?>
<script>
window.setTimeout(function() {
    window.location = 'createAccount.php';
  }, 0);
</script>
