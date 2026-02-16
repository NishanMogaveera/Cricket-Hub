<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome <?= $_SESSION['user']; ?> 🎉</h2>

<p>You are successfully logged in.</p>

<a href="logout.php">Logout</a>
