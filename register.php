<?php
session_start();
?>
<?php
include "config/db.php";

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "✅ Registration successful. <a href='login.php'>Login</a>";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>

<link rel="stylesheet" href="css/auth.css">

<div class="auth-box">
    <h2>Create Account</h2>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="register">Register</button>
    </form>

    <p>Already registered? <a href="login.php">Login</a></p>
</div>

