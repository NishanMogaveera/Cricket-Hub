<?php

$conn = mysqli_connect(
    "127.0.0.1",   // ✅ MUST be 127.0.0.1
    "root",
    "",
    "cricket_hub",
    3307           // ✅ correct port
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
