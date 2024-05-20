<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .center {
            margin: 0 auto;
            max-width: 600px;
            padding: 20px;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #4CAF50;
            border: 5px;
            padding: 10px;
            margin: 25px auto;
            width: 30%;
            box-sizing: border-box;
            border-radius: 0px;
            text-align: center;
            color: #FFFFFF;
        }
        h6 {
            font-weight: normal;
        }
        body {
            background-color: #F5F5F5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a {
            color: #FFFFFF;
            text-decoration: none;
        }
        a:visited {
            color: #487253;
        }
        a:hover {
            color: #64c8a8;
            text-decoration: underline;
        }
        a:active {
            color: #40826D;
        }
    </style>
</head>
<body>
    <div class="center">
        <h3>Register</h3>
    <form action="handleForm.php" method="POST">
        <div class="fields">
            <p>Username: <input type="text" placeholder="" class="fields" name="username"></p>
            <p>Password: <input type="password" placeholder="" class="fields" name="password"></p>
            <p><input type="submit" value="Register" id="submitBtn" name="regBtn"></p>
            <p><span class="small-Text"><h6>Back to <b><a href="login.php">Login</a></b>?</h6></span></p>
        </div>
    </form>
    </div>
</body>
</html>
