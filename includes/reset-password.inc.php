<?php

if (isset($_POST["reset-password-submit"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if (empty($password) || empty($passwordRepeat)) {
        header("Location: ../create-new-password.php?newpwd-empty");
        exit();
    } elseif ($password !== $passwordRepeat) {
        header("Location: ../create-new-password.php?newpwd=pwdnotsame");
        exit();
    }

    $currentDate = date("U");

    require 'dhb-handler.php'; 

    
    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector = ? AND pwdResetExpires >= ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$selector, $currentDate]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        echo "Re-submit the reset request.";
        exit();
    }

    
    $tokenBin = hex2bin($validator);
    if (!password_verify($tokenBin, $row["pwdResetToken"])) {
        echo "Re-submit the reset request.";
        exit();
    }

    $tokenEmail = $row['pwdResetEmail'];

    
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tokenEmail]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "There was an error!";
        exit();
    }

    
    $sql = "UPDATE users SET pwd = ? WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
    $stmt->execute([$newPwdHash, $tokenEmail]);

   
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$tokenEmail]);

    header("Location: ../login-signup.php?newpwd=passwordupdated");
    exit();

} else {
    header("Location: ../index.php");
    exit();
}
