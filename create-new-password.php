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
    <link rel="stylesheet" href="styles/other/general.css">
</head>
<body>

    <div class="login-signup-container">

        <?php
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];

            if (empty($selector) || empty($validator)) {
                echo "Could not validate your request!";
            } else {
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                    ?>

                        <form class="login-form" method="post" action="includes/reset-password.inc.php">

                            <input type="hidden" name="selector" value="<?php echo htmlspecialchars($selector); ?>">

                            <input type="hidden" name="validator" value="<?php echo htmlspecialchars($validator); ?>">

                            <label for="pwd">Password
                                <input type="password" id="pwd" name="pwd">
                            </label>

                            <label for="pwd-repeat">Repeat Password
                                <input type="password" id="pwd-repeat" name="pwd-repeat">
                            </label>

                            <button type="submit" name="reset-password-submit">Submit password</button>

                        </form>

                    <?php
                }
            }
        ?>

    </div>

</body>
</html>