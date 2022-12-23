<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="validate.js" defer></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="loginpage">
        <div class="login_container">
            <form action="loginconnect.php" method="POST" class="loginform" name="myform">
                <p class="loginp">LOGIN</p>
                <div class="username_section formsections">
                    <label for="name" class="labels">Name</label>
                    <input type="text" name="name" class="name">
                    <small class="err1">Proper Username Required!!!</small>
                </div>
                <div class="email_section formsections">
                    <label for="email" class="labels">E-Mail</label>
                    <input type="email" name="email" class="email">
                    <small class="err2">Proper E-Mail Required!!!</small>
                </div>
                <div class="password_section formsections">
                    <label for="password" class="labels">Password</label>
                    <input type="password" name="password" class="password">
                    <small class="err3">Proper Password Required!!!</small>
                </div>
                <input type="submit" value="LOGIN" class="login_btn">
            </form>
        </div>
    </div>
</body>

</html>