<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="shortcut icon" type="image/png" href="images/book.png"/>
</head>

<header class="container pb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" >Portfolio</a>
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
                <li class="nav-item ">
                    <a class="nav-link" href="https://github.com/pavldavid/portfolio">GitHub</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body id="adminbody" class="pd-5 pt-4">
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Personal Admin Page</h1>
        </div>
    </div>

<div id="tablediv" class="container">
    <table id="guestTable" class="display table-responsive">
        <thead>
            <tr>
                <th>Timestamp</th>
                <th>Name</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Linkedin</th>
                <th>Email</th>
                <th>How we met</th>
                <th>otherText</th>
                <th>message</th>
            </tr>

        </thead>
        <tbody>

        <?php
        require ('connect.php');
        $cnxn = connect();

        $sql = "SELECT * FROM guestbook";

        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        foreach ($result as $row) {
            $dateSubmit = $row['dateSubmit'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $jtitle = $row['jtitle'];
            $company= $row['company'];
            $url = $row['url'];
            $email = $row['email'];
            $met = $row['met'];
            $otherText = $row['otherText'];
            $message = $row['message'];

            echo "<tr>
                      <td>$dateSubmit</td>
                      <td>$fname $lname</td>
                      <td>$jtitle</td>
                      <td>$company</td>
                      <td>$url</td>
                      <td>$email</td>
                      <td>$met</td>
                      <td>$otherText</td>
                      <td>$message</td>
                  </tr>
            ";
        }
        ?>
        </tbody>
    </table>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
        $('#guestTable').DataTable();
</script>

</body>
</html>