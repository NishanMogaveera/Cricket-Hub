<?php
session_start();
require_once __DIR__ . "/config/db.php";


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Wrong password";
        }
    } else {
        $error = "User not found";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/auth.css">
</head>
<body>


<div class="login-wrapper">

  

<div class="auth-box">

  <div class="login-logo">
    <img src="images/logo.png" alt="Cricket Hub Logo">
  </div>
    <h2>Login</h2>

    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <p>Don't have an account? <a href="register.php">Register</a></p>
</div>
</div>

</body>
</html>
