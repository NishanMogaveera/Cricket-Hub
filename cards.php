<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cricket Player Cards</title>
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
      <a href="leaderboard.php">Leaderboard</a>
      <a href="cart.php">🛒 Cart</a>
    </nav>
  </div>
</header>

<div class="quiz-container">

  <div class="title-wrapper">
  <h1 class="page-title">Cricket Cards</h1>
  </div>

  <div class="shop-container">

<!-- 1 -->
<div class="product-card"
 data-id="virat-kohli"
 data-name="Virat Kohli Card"
 data-price="199"
 data-img="images/cards/kohli.png"
 data-desc="Indian batsman with aggressive mindset and consistency."
 onclick="openModal(this)">
<img src="images/cards/kohli.png">
<h3>Virat Kohli</h3>
<p>₹199</p>
<button onclick="event.stopPropagation(); addToCart('virat-kohli','Virat Kohli Card',199,'images/cards/kohli.png',this)">Add to Cart</button>
</div>

<!-- 2 -->
<div class="product-card"
 data-id="brendon-mccullum"
 data-name="Brendon McCullum Card"
 data-price="399"
 data-img="images/cards/bazz.png"
 data-desc="Explosive Kiwi opener and IPL legend."
 onclick="openModal(this)">
<img src="images/cards/bazz.png">
<h3>Brendon McCullum</h3>
<p>₹399</p>
<button onclick="event.stopPropagation(); addToCart('brendon-mccullum','Brendon McCullum Card',399,'images/cards/bazz.png',this)">Add to Cart</button>
</div>

<!-- 3 -->
<div class="product-card"
 data-id="brian-lara"
 data-name="Brian Lara Card"
 data-price="299"
 data-img="images/cards/lara.png"
 data-desc="West Indies batting legend."
 onclick="openModal(this)">
<img src="images/cards/lara.png">
<h3>Brian Lara</h3>
<p>₹299</p>
<button onclick="event.stopPropagation(); addToCart('brian-lara','Brian Lara Card',299,'images/cards/lara.png',this)">Add to Cart</button>
</div>

<!-- 4 -->
<div class="product-card"
 data-id="dale-steyn"
 data-name="Dale Steyn Card"
 data-price="499"
 data-img="images/cards/dale.png"
 data-desc="One of the fastest and fiercest bowlers."
 onclick="openModal(this)">
<img src="images/cards/dale.png">
<h3>Dale Steyn</h3>
<p>₹499</p>
<button onclick="event.stopPropagation(); addToCart('dale-steyn','Dale Steyn Card',499,'images/cards/dale.png',this)">Add to Cart</button>
</div>

<!-- 5 -->
<div class="product-card"
 data-id="ms-dhoni"
 data-name="MS Dhoni Card"
 data-price="99"
 data-img="images/cards/dhoni.png"
 data-desc="Legendary Indian captain and finisher."
 onclick="openModal(this)">
<img src="images/cards/dhoni.png">
<h3>MS Dhoni</h3>
<p>₹99</p>
<button onclick="event.stopPropagation(); addToCart('ms-dhoni','MS Dhoni Card',99,'images/cards/dhoni.png',this)">Add to Cart</button>
</div>

<!-- 6 -->
<div class="product-card"
 data-id="shane-warne"
 data-name="Shane Warne Card"
 data-price="149"
 data-img="images/cards/warne.png"
 data-desc="Spin magician of world cricket."
 onclick="openModal(this)">
<img src="images/cards/warne.png">
<h3>Shane Warne</h3>
<p>₹149</p>
<button onclick="event.stopPropagation(); addToCart('shane-warne','Shane Warne Card',149,'images/cards/warne.png',this)">Add to Cart</button>
</div>

<!-- 7 -->
<div class="product-card"
 data-id="glenn-maxwell"
 data-name="Glenn Maxwell Card"
 data-price="99"
 data-img="images/cards/maxwell.png"
 data-desc="The Big Show — explosive all-rounder."
 onclick="openModal(this)">
<img src="images/cards/maxwell.png">
<h3>Glenn Maxwell</h3>
<p>₹99</p>
<button onclick="event.stopPropagation(); addToCart('glenn-maxwell','Glenn Maxwell Card',99,'images/cards/maxwell.png',this)">Add to Cart</button>
</div>

<!-- 8 -->
<div class="product-card"
 data-id="wasim-akram"
 data-name="Wasim Akram Card"
 data-price="149"
 data-img="images/cards/akram.png"
 data-desc="Prince of Swing."
 onclick="openModal(this)">
<img src="images/cards/akram.png">
<h3>Wasim Akram</h3>
<p>₹149</p>
<button onclick="event.stopPropagation(); addToCart('wasim-akram','Wasim Akram Card',149,'images/cards/akram.png',this)">Add to Cart</button>
</div>

<!-- 9 -->
<div class="product-card"
 data-id="hardik-pandya"
 data-name="Hardik Pandya Card"
 data-price="299"
 data-img="images/cards/hardik.png"
 data-desc="Hard-hitting Indian all-rounder."
 onclick="openModal(this)">
<img src="images/cards/hardik.png">
<h3>Hardik Pandya</h3>
<p>₹299</p>
<button onclick="event.stopPropagation(); addToCart('hardik-pandya','Hardik Pandya Card',299,'images/cards/hardik.png',this)">Add to Cart</button>
</div>

<!-- 10 -->
<div class="product-card"
 data-id="rohit-sharma"
 data-name="Rohit Sharma Card"
 data-price="149"
 data-img="images/cards/rohit.png"
 data-desc="Hitman — Indian opener."
 onclick="openModal(this)">
<img src="images/cards/rohit.png">
<h3>Rohit Sharma</h3>
<p>₹149</p>
<button onclick="event.stopPropagation(); addToCart('rohit-sharma','Rohit Sharma Card',149,'images/cards/rohit.png',this)">Add to Cart</button>
</div>

<!-- 11 -->
<div class="product-card"
 data-id="dj-bravo"
 data-name="DJ Bravo Card"
 data-price="199"
 data-img="images/cards/bravo.png"
 data-desc="West Indies bowling all-rounder and T20 legend."
 onclick="openModal(this)">
<img src="images/cards/bravo.png">
<h3>DJ Bravo</h3>
<p>₹199</p>
<button onclick="event.stopPropagation(); addToCart('dj-bravo','DJ Bravo Card',199,'images/cards/bravo.png',this)">Add to Cart</button>
</div>

<!-- 12 -->
<div class="product-card"
 data-id="ben-stokes"
 data-name="Ben Stokes Card"
 data-price="399"
 data-img="images/cards/stokes.png"
 data-desc="England's greatest match-winner and all-rounder."
 onclick="openModal(this)">
<img src="images/cards/stokes.png">
<h3>Ben Stokes</h3>
<p>₹399</p>
<button onclick="event.stopPropagation(); addToCart('ben-stokes','Ben Stokes Card',399,'images/cards/stokes.png',this)">Add to Cart</button>
</div>

<!-- 13 -->
<div class="product-card"
 data-id="david-warner"
 data-name="David Warner Card"
 data-price="259"
 data-img="images/cards/warner.png"
 data-desc="Aggressive Australian left-handed opener."
 onclick="openModal(this)">
<img src="images/cards/warner.png">
<h3>David Warner</h3>
<p>₹259</p>
<button onclick="event.stopPropagation(); addToCart('david-warner','David Warner Card',259,'images/cards/warner.png',this)">Add to Cart</button>
</div>

<!-- 14 -->
<div class="product-card"
 data-id="trent-boult"
 data-name="Trent Boult Card"
 data-price="99"
 data-img="images/cards/boult.png"
 data-desc="Deadly left-arm swing bowler."
 onclick="openModal(this)">
<img src="images/cards/boult.png">
<h3>Trent Boult</h3>
<p>₹99</p>
<button onclick="event.stopPropagation(); addToCart('trent-boult','Trent Boult Card',99,'images/cards/boult.png',this)">Add to Cart</button>
</div>

<!-- 15 -->
<div class="product-card"
 data-id="ricky-ponting"
 data-name="Ricky Ponting Card"
 data-price="299"
 data-img="images/cards/ricky.png"
 data-desc="Greatest Australian captain with 3 World Cups."
 onclick="openModal(this)">
<img src="images/cards/ricky.png">
<h3>Ricky Ponting</h3>
<p>₹299</p>
<button onclick="event.stopPropagation(); addToCart('ricky-ponting','Ricky Ponting Card',299,'images/cards/ricky.png',this)">Add to Cart</button>
</div>

<!-- 16 -->
<div class="product-card"
 data-id="abd"
 data-name="AB de Villiers Card"
 data-price="199"
 data-img="images/cards/ABD.png"
 data-desc="Mr 360 — the most innovative batsman ever."
 onclick="openModal(this)">
<img src="images/cards/ABD.png">
<h3>AB de Villiers</h3>
<p>₹199</p>
<button onclick="event.stopPropagation(); addToCart('abd','AB de Villiers Card',199,'images/cards/ABD.png',this)">Add to Cart</button>
</div>

<!-- 17 -->
<div class="product-card"
 data-id="gilchrist"
 data-name="Adam Gilchrist Card"
 data-price="699"
 data-img="images/cards/gilchrist.png"
 data-desc="Greatest wicket-keeper batsman of all time."
 onclick="openModal(this)">
<img src="images/cards/gilchrist.png">
<h3>Adam Gilchrist</h3>
<p>₹699</p>
<button onclick="event.stopPropagation(); addToCart('gilchrist','Adam Gilchrist Card',699,'images/cards/gilchrist.png',this)">Add to Cart</button>
</div>

<!-- 18 -->
<div class="product-card"
 data-id="kallis"
 data-name="Jacques Kallis Card"
 data-price="799"
 data-img="images/cards/kallis.png"
 data-desc="Greatest all-rounder in cricket history."
 onclick="openModal(this)">
<img src="images/cards/kallis.png">
<h3>Jacques Kallis</h3>
<p>₹799</p>
<button onclick="event.stopPropagation(); addToCart('kallis','Jacques Kallis Card',799,'images/cards/kallis.png',this)">Add to Cart</button>
</div>

<!-- 19 -->
<div class="product-card"
 data-id="clarke"
 data-name="Michael Clarke Card"
 data-price="199"
 data-img="images/cards/clarke.png"
 data-desc="2015 World Cup winning Australian captain."
 onclick="openModal(this)">
<img src="images/cards/clarke.png">
<h3>Michael Clarke</h3>
<p>₹199</p>
<button onclick="event.stopPropagation(); addToCart('clarke','Michael Clarke Card',199,'images/cards/clarke.png',this)">Add to Cart</button>
</div>

<!-- 20 -->
<div class="product-card"
 data-id="starc"
 data-name="Mitchell Starc Card"
 data-price="199"
 data-img="images/cards/starc.png"
 data-desc="Left-arm pace demon and World Cup destroyer."
 onclick="openModal(this)">
<img src="images/cards/starc.png">
<h3>Mitchell Starc</h3>
<p>₹199</p>
<button onclick="event.stopPropagation(); addToCart('starc','Mitchell Starc Card',199,'images/cards/starc.png',this)">Add to Cart</button>
</div>


  </div>
</div>


<!-- MODAL -->
<div id="cardModal" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal()">&times;</span>
    <img id="modalImg">
    <h2 id="modalTitle"></h2>
    <p id="modalPrice"></p>
    <p id="modalDesc"></p>
    <button id="modalAddBtn" class="modal-cart-btn">Add to Cart</button>
  </div>
</div>

<script src="js/script.js"></script>
<script src="cards.js"></script>
<script src="cart.js"></script>

</body>
</html>
