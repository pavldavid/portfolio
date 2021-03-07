

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

<body id="guestbody" class="pd-5 pt-4">
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-2">Sign My GuestBook!</h1>
            <p class="lead">I would like to stay in contact with my professional contacts. The form here
                will help me stay in better contact with you. Thank You!</p>
        </div>

        <form action="confirm.php" method="post" id="guestbook">
            <fieldset id="contact" class="form-group border p-2">
                <legend>Contact Info</legend>
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname"
                           placeholder="Enter first name" name="fname">
                    <span class="err" id="err-fname">
                    Please enter a first name
                    </span>
                </div>

                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname"
                           placeholder="Enter last name" name="lname">
                    <span class="err" id="err-lname">
                    Please enter a last name
                    </span>
                </div>

                <div class="form-group">
                    <label for="jtitle">Job Title:</label>
                    <input type="text" class="form-control" id="jtitle"
                           placeholder="Enter job title" name="jtitle">
                </div>

                <div class="form-group">
                    <label for="company">Company:</label>
                    <input type="text" class="form-control" id="company"
                           placeholder="Enter a company" name="company">
                </div>

                <div class="form-group">
                    <label for="url">Linkedln URL:</label>
                    <input type="text" class="form-control" id="url"
                           placeholder="Enter Linkedln URl" name="url">
                    <span class="err" id="err-url">
                    Please enter a url
                    </span>
                </div>

                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="text" class="form-control" id="email"
                           placeholder="Enter email address" name="email">
                    <span class="err" id="err-email">
                    Please enter an email with proper formatting including "@" and "."
                    </span>

                </div>
            </fieldset>

            <fieldset id="meeting" class="form-group border p-2">
                <legend>How we met</legend>
                <div class="form-group">
                    <label for="met">How did we met?</label>
                    <select id="met" class="form-control" name="met">
                        <option value="none">-- Select --</option>
                        <option value="meetup">Meetup</option>
                        <option value="jobfair">Job Fair</option>
                        <option value="notmet">We haven't met yet</option>
                        <option value="other">Other</option>
                    </select>

                    <span class="err" id="err-met">
                    Please choose an option for how we met
                    </span>
                </div>

                <div class="form-group">
                    <label for="othertext">Other: (Please Specify)</label>
                    <input type="text" class="form-control" id="othertext"
                           placeholder="please specify" name="othertext">
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Your message"></textarea>
                </div>
            </fieldset>

            <fieldset id="mailing" class="form-group border p-2">
                <legend>Mailing List</legend>
                <div class="form-check">
                    <label class="form-check-label" >
                        <input id="check" class="form-check-input" type="checkbox">Please add me to your mailing list!
                    </label>
                </div>
                <br/>

                <div>
                    <p>Please choose an email format:</p>
                    <input type="radio" id="html" value="html">
                    <label for="html">HTML</label>
                    <input type="radio" id="text" value="text">
                    <label for="text">Text</label>
                </div>
            </fieldset>

            <button id="submit" type="submit" class="btn btn-primary btn-default">Submit</button>
        </form>

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
    <script src="scripts.js"></script>
</body>
</html>