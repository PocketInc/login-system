<!--

This file handles the login information.
it will receive the info sent from the Login Page (login/index.php) via POST method,
and it will search for the email in the database.

if email is found and password is correct, it will login, otherwise it will send that it's incorrect.


more info about each line is bellow..
-->


<!-- This is only used so the page fits the mobile screen. -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- PHP CODE: -->

<?php

if (!isset($_COOKIE['log'])) {
// the above IF statement makes sure that person didn't login yet since he doesn't have a cookie setted
    if (isset($_POST['Email1']) && isset($_POST['Password1'])) {
// the above IF statement makes sure that the person's entered information are received.
        $email = $_POST['Email1'];
        $pass = $_POST['Password1'];
        $enEm = convert_uuencode($email);
        // the variable ($enEm) holds the "ENCODED" version of the email address. for a better security!


        $servername = "sql.host.domain"; //change this to your Database Server Host.
        $username = "exampleUsername"; //change this to your Database Username.
        $password = "examplePassword"; //change this to your Database Password.
        $basename = "exampleName"; //change this to your Database Name.


        $conn = new mysqli($servername, $username, $password, $basename);
        // the "new mysqli" connects to the mySQL server.

        $sql = "SELECT email, password FROM users";
        // the ($sql) is the code we will send to the mySQL server.

        $result = $conn->query($sql);
        // the ($result) is the response of the server when we send the above code ($sql)

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                // we will check row by row..
            if ($row['email'] == $email) {
                // if the current row holds the email..
                if ($row['password'] == $pass) {
                    // and the password of the email is correctly written..
                    setcookie("log", $enEm);
                    // setcookie with ENCODED version of the email.
                    echo "<script>window.open('index.php','_self')</script>";
                    // and finally, redirect to the (index.php).
                }
            }
            }
            echo "<p style='text-align:center'><b>Invaild account!</b><br><a href='login/' style='text-align:center'>Try Again?</a></p>";
            // ^ if the email written doesn't match any email, then send "Invaild Account" with a button to try again.
        } else {
            echo "<p style='text-align:center'><b>ERROR! database is empty or connot be found.</b><br><a href='login/' style='text-align:center'>Try Again?</a></p>";
            // ^ if the database table doesn't have any accounts, then send "ERROR" with a button to try again.

        }

    } else {
        echo "<script>location.reload()</script>";
        // if one of the required fields is not written, redirect to (error_log.php)
    }
} else {
    echo "<script>window.open('index.php','_self')</script>";
    // if person is already logged in, redirect to (index.php)
}
?>