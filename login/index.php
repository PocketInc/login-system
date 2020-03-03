<?php
if (isset($_COOKIE['log'])) {
    echo "<script>window.open('../','_self')</script>";
    // checks if person is logged in, if so, redirect to ../index.php
}
?>
<!--
This is a simple looking Login Page.
edit this freely, but keep the <form ...> .. </form>
and make sure to keep the <input> having current name=".."
-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../external/bootstrap.css">
    <script src="../external/jquery.js"></script>
    <script src="../external/popper.js"></script>
    <script src="../external/bootstrap.js"></script>
    <title>Login | Pocket Inc</title>
</head>
<body bgcolor="teal">
<h1 style="text-align: center;font-family: 'Comic Sans MS'">Login</h1>
<hr class="hr-25">

<div class="container">

<form method="post" action="../log.php">
    <div class="form-group">
        <label for="Email1">Email address</label>
        <input type="email" class="form-control" id="Email1" name="Email1">
    </div>
    <div class="form-group">
        <label for="Password1">Password</label>
        <input type="password" class="form-control" id="Password1" name="Password1">
    </div>

    <button type="submit" class="btn btn-success">Login</button>
</form>
    <p style="text-align: center"><a href="../register" class="btn btn-primary">Register</a></p>
</div>


</body>
</html>