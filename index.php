<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="MORE SUCCESS">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP FORM PAGE</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="container">
            <form action="connect.php" id="form" method="post">
                <h1>Registration page</h1>
                <input type="text" placeholder="First Name..." name="fname" required>
                <input type="text" placeholder="Last Name..." name="lname" required>
                <input type="email" placeholder="Email ID..." name="email" required>
                <input type="password" id="pass" placeholder="Password..." name="psd" required>
                <input type="password"  id="confpass" placeholder="Confirm password.." name="confpsd" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>