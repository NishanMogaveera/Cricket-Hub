<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Cart</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="navbar">
  <div class="navbar-inner">
    <div class="logo">
    <img src="images/logo.png" class="logo-icon" alt="Logo">
    <span>Cricket Hub</span>
    </div>
    <nav class="nav-links">
      <a href="index.php">Quiz</a>
      <a href="jerseys.php">Jerseys</a>
      <a href="cards.php">Cards</a>
      <a href="cart.php" class="active">Cart</a>
      <a href="leaderboard.php">Leaderboard</a>
    </nav>
  </div>
</header>

<div class="quiz-container cart-container">
  <h1>🛒 Your Cart</h1>

  <ul id="cart-items" class="cart-list"></ul>

  
  <h2 id="total" class="total-bill"></h2>

  <div class="cart-actions">
    <button onclick="clearCart()" class="danger">Clear Cart</button>
    <button onclick="checkout()" class="success">Proceed to Buy</button>
  </div>
</div>

<script src="js/script.js"></script>

<script>
function checkout() {
  window.location.href = "payment.php";
}
</script>

</body>
</html>


