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
    <title>Reset password</title>
    <link rel="icon" type="image/png" href="images/whop_favicon_orange.png">
    <link rel="stylesheet" href="styles/login-signup/login.css">
    <link rel="stylesheet" href="styles/other/header.css">
    <link rel="stylesheet" href="styles/other/general.css">
</head>
<body>
    
    <?php require_once 'header.php'; ?>

    <div class="login-signup-container">
        <form class="login-form" method="post" action="includes/reset-request.inc.php">
            <h1>Reset password</h1>

            <label for="email">E-mail
                <input type="email" id="email" name="email">
            </label>

            <button type="submit" name="reset-request-submit">Verzenden</button>
        </form>
        <?php
            if (isset($_GET["reset"])) {
                if ($_GET["reset"] == "success") {
                    echo '<p class="signupsuccess">Check your e-mail!</p>';
                }
            }
        ?>
    </div>

</body>
</html>