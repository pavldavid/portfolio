<?php

if(!($_SERVER['REQUEST_METHOD'] == 'POST')){
    header("location: guestbook.php");
    }

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

// Connect to DB
    require ('connect.php');
    $cnxn = connect();

    //echo $_POST['message'];
    /*
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";*/

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $jtitle = $_POST['jtitle'];
    $company= $_POST['company'];
    $url = $_POST['url'];
    $email = $_POST['email'];
    $met = $_POST['met'];
    $otherText = $_POST['othertext'];
    $message = $_POST['message'];

    $sql = "INSERT INTO guestbook (fname, lname, jtitle, company, url, email, met, otherText, message) 
     VALUES ('$fname', '$lname', '$jtitle', '$company', '$url', '$email', '$met', '$otherText', '$message')";
    //echo $sql;

    $success = mysqli_query($cnxn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GuestBook</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="images/book.png"/>
</head>

<header class="container pb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="h2 navbar-brand" >Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active ">
                    <a class="nav-link" href="http://dpavlenko.greenriverdev.com/305/Portfolio/resume.php">Resume<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="http://dpavlenko.greenriverdev.com/305/Portfolio/guestbook.php">Guestbook</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="http://dpavlenko.greenriverdev.com/305/Portfolio/admin.php">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body id="confirmBody">
<div class="container" id="main">
    <?php
    if ($success) {
        echo '<div class="jumbotron">
        <h1 class="display-4">Thank You for Signing my Guestbook</h1>
        <p class="lead">I look forward to reaching out to you!!!</p>
             </div>';
    } else {
        echo "Something went wrong";
    }
    ?>
</div>
</body>
</html>