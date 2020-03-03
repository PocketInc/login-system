<!--
< Login and Registration System >
https://github.com/PocketInc/login-system

© 2020 Pocket, Inc. all rights reserved.
-->
<html>
<head>
    <title>Login System | © Pocket Inc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>
<!-- This file can safely be replaced by the file you want people to LOGIN to read.
but just paste in your custom file this:

if (!isset($_COOKIE['log'])) {
    echo "<script>window.open('login/','_self')</script>";
}

-->
<?php
if (isset($_COOKIE['log'])) {
    echo "Logged in as: " . convert_uudecode($_COOKIE['log']);
} else {
    echo "Not Logged in..";
    echo "<script>window.open('login/','_self')</script>";
}
?>
</body>
</html>