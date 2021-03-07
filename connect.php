<?php

function connect()
{
    $username = "dpavlenk_grcuser";
    $password = "[1%0(dXcybR0";
    $hostname = "localhost";
    $database = "dpavlenk_grc";

    $cnxn = @mysqli_connect($hostname, $username, $password, $database)
    or die("Error connecting to database");
    return $cnxn;
}
