 <?php 
 session_start();

 if(isset($_SESSION['welcomeMessage']) && !isset($_SESSION['username'])) {
     echo $_SESSION['welcomeMessage'];
 }
 ?>
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
             background-color: #006400;
             border: 5px;
             padding: 10px;
             margin: 25px auto;
             width: 30%;
             box-sizing: border-box;
             border-radius: 0;
             text-align: center;
             color: #F5F5F5;
             }
         h6 {
             font-weight: normal;
         }
         body {
             background-color: #F5F5F5;
             font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         }
         a {
             color: #F5F5F5;
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

         <h3>Login</h3>
     <form action="handleForm.php" method="POST">
         <div class="fields">
             <p>Username: <input type="text" placeholder="" class="fields" name="username"></p>
             <p>Password: <input type="password" placeholder="" class="fields" name="password"></p>
             <p><input type="submit" value="Login" id="loginBtn" name="loginBtn"></p>
         </div>
     </form>
     <p><h6>No account yet? Click here to <b><a href="register.php">Register</a></b>.</h6></p>
     </div>

 </body>
 </html>
