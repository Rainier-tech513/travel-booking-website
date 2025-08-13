<?php

if (isset($_POST["reset-request-submit"])) {

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "fit-track.nl/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
    $expires = date("U") + 1800;

    require 'dhb-handler.php'; 

    $userEmail = $_POST["email"];


    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userEmail]);

 
    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) 
            VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    $stmt->execute([$userEmail, $selector, $hashedToken, $expires]);

 
    $to = $userEmail;
    $subject = "Reset your password for Whop";

    $message = '<p>We received a password reset request. You can find the link to reset your password below. 
                If you did not make this request, you can safely ignore this email.</p>';
    $message .= '<p>Here is your password reset link:<br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $headers = "From: Whop <gijsenrainier@gmail.com>\r\n"; // als je lokaal runt worden emails niet verstuurd
    $headers .= "Reply-To: gijsenrainier@gmail.com\r\n"; // als je lokaal runt worden emails niet verstuurd
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);


    header("Location: ../reset-password.php?reset=success");
    exit();

} else {
    header("Location: ../index.php");
    exit();
}
