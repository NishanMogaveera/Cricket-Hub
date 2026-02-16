<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Leaderboard</title>
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
      <a href="leaderboard.php" class="active">Leaderboard</a>
    </nav>
  </div>
</header>

<div class="quiz-container">
  <div class="glass-title">
  🏆 <span>Leaderboard</span>
  </div>

  <div class="leaderboard-wrapper">


  <table class="leaderboard-table">
  <thead>
    <tr>
      <th>Rank</th>
      <th>Player</th>
      <th>Score</th>
      <th>Time (s)</th>
    </tr>
  </thead>

  <tbody id="leaderboard-body">
  </tbody>
</table>

</div>

</div>

<script src="leaderboard.js"></script>
</body>
</html>
