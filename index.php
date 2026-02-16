<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cricket Quiz Game</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header class="navbar">
  <div class="navbar-inner">
    <div class="logo">
      <img src="images/logo.png" class="logo-icon">
      <span>Cricket Hub</span>
    </div>

    <nav class="nav-links">

  <a href="index.php">Quiz</a>
  <a href="jerseys.php">Jerseys</a>
  <a href="cards.php">Cards</a>
  <a href="leaderboard.php">Leaderboard</a>
  


  <a href="cart.php" class="cart-link">
    🛒 Cart <span id="cart-count">0</span>
  </a>

  <?php if (isset($_SESSION["username"])): ?>


      <a href="logout.php">Logout</a>

  <?php else: ?>

      <a href="login.php">Login</a>
      <a href="register.php">Register</a>

  <?php endif; ?>

</nav>


  </div>
  </header>

  <div class="start-screen" id="start-screen">
  <div class="hero-wrapper">

    <div class="hero-text">
        <h1><span>🏏</span> Cricket Quiz</h1>
        <p>Test your cricket knowledge!</p>
    </div>

  <button id="start-btn" class="start-btn">Start Quiz</button>
  </div>

  <div class="features">
  <a href="index.php" class="card-link">
  <div class="feature-card">
    <img src="images/icons/quiz.png" class="feature-icon">
    <h3>Cricket Quiz</h3>
    <p>Test your cricket knowledge</p>
  </div>
  </a>

  <a href="jerseys.php" class="card-link">
  <div class="feature-card">
    <img src="images/jerseys/ind19.png" class="feature-icon">
    <h3>Jerseys Store</h3>
    <p>Buy official team jerseys</p>
  </div>
  </a>

  <a href="cards.php" class="card-link">
  <div class="feature-card">
    <img src="images/cards/bazz.png" class="feature-icon">
    <h3>Player Cards</h3>
    <p>Collect legendary cricketers</p>
  </div>
  </a>
  
  <a href="leaderboard.php" class="card-link">
  <div class="feature-card">
    <img src="images/icons/trophy.png" class="feature-icon">
    <h3>Leaderboard</h3>
    <p>Compete with other players</p>
  </div>
  </a>
</div>
</div>


  <div class="quiz-container" id="quiz-container" style="display:none;">
    <h1>Cricket Quiz</h1>
    <div id="question-container">
        <p id="question"></p>
        <div id="timer">10s</div>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        <div id="options" class="options"></div>
    </div>
    <div id="result"></div>
    <button id="next-button">NEXT</button>
    <button id="quit-button">QUIT QUIZ</button>
    <button id="restart-button" style="display: none;">RESTART</button>
    <p id="score">Score: 0</p>
</div>
  <script src="js/script.js"></script>
</body>
</html>

