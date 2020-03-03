<!--
This code handles the registration.
it will receive the info written in the registration page via POST method.
it will check if email is already registred, if so, redirect to (error_reg.php)
otherwise, it will add the info to the users database and log in

more info in each line.
-->


<?php
//PHP code starts..

if (!isset($_COOKIE['log'])) {
    //checks is person is already logged in.
    if (isset($_POST['Email1']) && isset($_POST['Password1']) && isset($_POST['User1'])) {
        //checks if person wrote all required fields..

        $email = $_POST['Email1'];
        $pass = $_POST['Password1'];
        $name = $_POST['User1'];
        //save all info received to variables.

        $enEm = convert_uuencode($email);
        // the variable ($enEm) holds the "ENCODED" version of the email address. for a better security!


        $servername = "sql.host.domain"; //change this to your Database Server Host.
        $username = "exampleUsername"; //change this to your Database Username.
        $password = "examplePassword"; //change this to your Database Password.
        $basename = "exampleName"; //change this to your Database Name.

        $conn = new mysqli($servername, $username, $password, $basename);
        // the "new mysqli" connects to the mySQL server.

        $sql = "SELECT email FROM users";
        // the ($sql) is the code we will send to the mySQL server.

        $result = $conn->query($sql);
        // the ($result) is the response of the server when we send the above code ($sql)


        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                //check row by row..
                if ($email == $row['email']) {
                    //if one of the rows have the written email, then redirect to error_reg.php
                    echo "<script>location.reload()</script>";

                }
            }
        }

        $sql1 = "INSERT INTO users (email, password)
VALUES ('" . $email . "', '" . $pass . "')";
        // insert the written info to the database.

        $result1 = $conn->query($sql1);
        // insert the written info to the database.


        setcookie("log", $enEm);
        // save ENCODED email as cookie.

        echo "<script>window.open('index.php','_self')</script>";
        //redirect to index.php

    } else {
        echo "<script>location.reload()</script>";
        // if any of the required fields is not written, redirect to error_reg.php
    }
} else {
    echo "<script>window.open('index.php','_self')</script>";
    // if person is already registed, redirect to index.php.
}
?>