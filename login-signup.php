<?php
    require_once 'includes/config-session.php';
    require_once 'includes/signup_view.php';
    require_once 'includes/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whop Login</title>
    <link rel="icon" type="image/png" href="images/whop_favicon_orange.png">
    <link rel="stylesheet" href="styles/login-signup/login.css">
    <link rel="stylesheet" href="styles/other/header.css">
    <link rel="stylesheet" href="styles/other/general.css">
</head>
<body>
    
    <?php require_once 'header.php'; ?>

    <div class="login-signup-container">
        <form class="login-form" method="post" action="includes/login-formhandler.php">
            <label for="email">E-mail
            <input type="email" id="email" name="email">
            </label>

            <label for="password">Password
                <input type="password" id="pwd" name="pwd">
            </label>

            <button type="submit">Login</button>

            <p onclick="openSignupForm()">Signup</p>


            <?php
            
            if (isset($_GET["newpwd"])) {
                if ($_GET["newpwd"] == "passwordupdated") {
                    echo '<p class="signupsuccess">Your password has been reset!</p>';
                }
            }
            
            ?>
            <a href="reset-password.php">Forgot password?</a>
        </form>

        <form class="signup-form" method="post" action="includes/signup-formhandler.php">
            <label for="name">Full name
            <input type="text" id="name" name="username">
            </label>

            <label for="email">E-mail
            <input type="email" id="email" name="email">
            </label>

            <label for="password">Password
            <input type="password" id="password" name="pwd">
            </label>

            <button type="submit">Signup</button>

            <p onclick="openLoginForm()">Login</p>
        </form>
    </div>


    <script src="javascript/login-signup.js"></script>
    <script src="javascript/general.js"></script>
</body>
</html>