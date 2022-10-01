<?php
    if (ISSET($_POST["submit"]))
    {
        $servername = "hidden:servername";
        $username = "hidden:username";
        $password = "hidden:password";
        $database = "hidden:database";

        $conn= mysqli($servername, $username, $password, $database);
    }
?>
