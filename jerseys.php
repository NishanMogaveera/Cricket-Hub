<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cricket Jerseys Shop</title>
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
  <h1 class="page-title">Cricket Jerseys</h1>
  </div>

  <div class="shop-container">

<!-- ================= JERSEYS ================= -->

<!-- 1 -->
<div class="product-card"
  data-id="ind-2011"
  data-name="2011 ODI WC India Jersey"
  data-price="1999"
  data-img="images/jerseys/india.png"
  data-desc="2011 World Cup Winning Indian Team Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/india.png">
<h3>2011 ODI WC India Jersey</h3>
<p>₹1999</p>
<button onclick="event.stopPropagation(); addToCart('ind-2011','2011 ODI WC India Jersey',1999,'images/jerseys/india.png',this)">Add to Cart</button>
</div>

<!-- 2 -->
<div class="product-card"
  data-id="csk-2018"
  data-name="2018 CSK Jersey"
  data-price="799"
  data-img="images/jerseys/csk.png"
  data-desc="Chennai Super Kings IPL Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/csk.png">
<h3>CSK Jersey</h3>
<p>₹799</p>
<button onclick="event.stopPropagation(); addToCart('csk-2018','2018 CSK Jersey',799,'images/jerseys/csk.png',this)">Add to Cart</button>
</div>

<!-- 3 -->
<div class="product-card"
  data-id="rcb-2016"
  data-name="2016 RCB Jersey"
  data-price="999"
  data-img="images/jerseys/rcb.png"
  data-desc="Royal Challengers Bangalore Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/rcb.png">
<h3>2016 RCB Jersey</h3>
<p>₹999</p>
<button onclick="event.stopPropagation(); addToCart('rcb-2016','2016 RCB Jersey',999,'images/jerseys/rcb.png',this)">Add to Cart</button>
</div>

<!-- 4 -->
<div class="product-card"
  data-id="aus-2015"
  data-name="2015 Australia WC Jersey"
  data-price="1349"
  data-img="images/jerseys/aus15.png"
  data-desc="2015 World Cup Winning Australia Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/aus15.png">
<h3>2015 Australia WC Jersey</h3>
<p>₹1349</p>
<button onclick="event.stopPropagation(); addToCart('aus-2015','2015 Australia WC Jersey',1349,'images/jerseys/aus15.png',this)">Add to Cart</button>
</div>

<!-- 5 -->
<div class="product-card"
  data-id="nz-2019"
  data-name="2019 New Zealand Jersey"
  data-price="799"
  data-img="images/jerseys/nz19.png"
  data-desc="2019 ODI World Cup New Zealand Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/nz19.png">
<h3>2019 New Zealand Jersey</h3>
<p>₹799</p>
<button onclick="event.stopPropagation(); addToCart('nz-2019','2019 New Zealand Jersey',799,'images/jerseys/nz19.png',this)">Add to Cart</button>
</div>

<!-- 6 -->
<div class="product-card"
  data-id="sa-2023"
  data-name="South Africa 2023 Jersey"
  data-price="699"
  data-img="images/jerseys/sa23.png"
  data-desc="2023 South Africa ODI World Cup Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/sa23.png">
<h3>South Africa Jersey</h3>
<p>₹699</p>
<button onclick="event.stopPropagation(); addToCart('sa-2023','South Africa 2023 Jersey',699,'images/jerseys/sa23.png',this)">Add to Cart</button>
</div>

<!-- 7 -->
<div class="product-card"
  data-id="mi-2019"
  data-name="2019 MI Jersey"
  data-price="999"
  data-img="images/jerseys/mi19.png"
  data-desc="Mumbai Indians IPL Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/mi19.png">
<h3>2019 MI Jersey</h3>
<p>₹999</p>
<button onclick="event.stopPropagation(); addToCart('mi-2019','2019 MI Jersey',999,'images/jerseys/mi19.png',this)">Add to Cart</button>
</div>

<!-- 8 -->
<div class="product-card"
  data-id="rcb-2011"
  data-name="2011 RCB Jersey"
  data-price="899"
  data-img="images/jerseys/rcb11.png"
  data-desc="2011 IPL RCB Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/rcb11.png">
<h3>2011 RCB Jersey</h3>
<p>₹899</p>
<button onclick="event.stopPropagation(); addToCart('rcb-2011','2011 RCB Jersey',899,'images/jerseys/rcb11.png',this)">Add to Cart</button>
</div>

<!-- 9 -->
<div class="product-card"
  data-id="ss-bbl"
  data-name="Sydney Sixers Jersey"
  data-price="799"
  data-img="images/jerseys/ss.png"
  data-desc="Sydney Sixers BBL Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/ss.png">
<h3>Sydney Sixers Jersey</h3>
<p>₹799</p>
<button onclick="event.stopPropagation(); addToCart('ss-bbl','Sydney Sixers Jersey',799,'images/jerseys/ss.png',this)">Add to Cart</button>
</div>

<!-- 10 -->
<div class="product-card"
  data-id="bh-bbl"
  data-name="Brisbane Heat Jersey"
  data-price="799"
  data-img="images/jerseys/bh.png"
  data-desc="Brisbane Heat BBL Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/bh.png">
<h3>Brisbane Heat Jersey</h3>
<p>₹799</p>
<button onclick="event.stopPropagation(); addToCart('bh-bbl','Brisbane Heat Jersey',799,'images/jerseys/bh.png',this)">Add to Cart</button>
</div>

<!-- 11 -->
<div class="product-card"
  data-id="as-bbl"
  data-name="Adelaide Strikers Jersey"
  data-price="799"
  data-img="images/jerseys/as.png"
  data-desc="Adelaide Strikers BBL Official Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/as.png">
<h3>Adelaide Strikers Jersey</h3>
<p>₹799</p>
<button onclick="event.stopPropagation(); addToCart('as-bbl','Adelaide Strikers Jersey',799,'images/jerseys/as.png',this)">Add to Cart</button>
</div>

<!-- 12 -->
<div class="product-card"
  data-id="nz-2015"
  data-name="2015 New Zealand Jersey"
  data-price="899"
  data-img="images/jerseys/nz15.png"
  data-desc="2015 ODI World Cup New Zealand Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/nz15.png">
<h3>2015 New Zealand Jersey</h3>
<p>₹899</p>
<button onclick="event.stopPropagation(); addToCart('nz-2015','2015 New Zealand Jersey',899,'images/jerseys/nz15.png',this)">Add to Cart</button>
</div>

<!-- 13 -->
<div class="product-card"
  data-id="eng-2019"
  data-name="2019 England WC Jersey"
  data-price="1199"
  data-img="images/jerseys/eng19.png"
  data-desc="2019 World Cup Winning England Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/eng19.png">
<h3>2019 England WC Jersey</h3>
<p>₹1199</p>
<button onclick="event.stopPropagation(); addToCart('eng-2019','2019 England WC Jersey',1199,'images/jerseys/eng19.png',this)">Add to Cart</button>
</div>

<!-- 14 -->
<div class="product-card"
  data-id="kkr-2024"
  data-name="KKR IPL Jersey"
  data-price="999"
  data-img="images/jerseys/kkr24.png"
  data-desc="Kolkata Knight Riders IPL Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/kkr24.png">
<h3>KKR Jersey</h3>
<p>₹999</p>
<button onclick="event.stopPropagation(); addToCart('kkr-2024','KKR IPL Jersey',999,'images/jerseys/kkr24.png',this)">Add to Cart</button>
</div>

<!-- 15 -->
<div class="product-card"
  data-id="mi-2015"
  data-name="2015 MI Jersey"
  data-price="899"
  data-img="images/jerseys/mi15.png"
  data-desc="Mumbai Indians 2015 IPL Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/mi15.png">
<h3>2015 MI Jersey</h3>
<p>₹899</p>
<button onclick="event.stopPropagation(); addToCart('mi-2015','2015 MI Jersey',899,'images/jerseys/mi15.png',this)">Add to Cart</button>
</div>

<!-- 16 -->
<div class="product-card"
  data-id="rcb-2025"
  data-name="2025 RCB Jersey"
  data-price="1999"
  data-img="images/jerseys/rcb25.png"
  data-desc="2025 Royal Challengers Bangalore Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/rcb25.png">
<h3>2025 RCB Jersey</h3>
<p>₹1999</p>
<button onclick="event.stopPropagation(); addToCart('rcb-2025','2025 RCB Jersey',1999,'images/jerseys/rcb25.png',this)">Add to Cart</button>
</div>

<!-- 17 -->
<div class="product-card"
  data-id="srh-2025"
  data-name="SRH IPL Jersey"
  data-price="699"
  data-img="images/jerseys/srh25.png"
  data-desc="Sunrisers Hyderabad Official Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/srh25.png">
<h3>SRH Jersey</h3>
<p>₹699</p>
<button onclick="event.stopPropagation(); addToCart('srh-2025','SRH IPL Jersey',699,'images/jerseys/srh25.png',this)">Add to Cart</button>
</div>

<!-- 18 -->
<div class="product-card"
  data-id="gt-ipl"
  data-name="GT IPL Jersey"
  data-price="799"
  data-img="images/jerseys/gt.png"
  data-desc="Gujarat Titans Official IPL Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/gt.png">
<h3>GT Jersey</h3>
<p>₹799</p>
<button onclick="event.stopPropagation(); addToCart('gt-ipl','GT IPL Jersey',799,'images/jerseys/gt.png',this)">Add to Cart</button>
</div>

<!-- 19 -->
<div class="product-card"
  data-id="ind-2007"
  data-name="2007 T20 WC India Jersey"
  data-price="799"
  data-img="images/jerseys/ind07.png"
  data-desc="2007 T20 World Cup Winning India Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/ind07.png">
<h3>2007 T20 WC India Jersey</h3>
<p>₹799</p>
<button onclick="event.stopPropagation(); addToCart('ind-2007','2007 T20 WC India Jersey',799,'images/jerseys/ind07.png',this)">Add to Cart</button>
</div>

<!-- 20 -->
<div class="product-card"
  data-id="ind-2019"
  data-name="2019 ODI WC India Jersey"
  data-price="899"
  data-img="images/jerseys/ind19.png"
  data-desc="2019 ODI World Cup India Jersey"
  onclick="openJerseyModal(this)">
<img src="images/jerseys/ind19.png">
<h3>2019 ODI WC India Jersey</h3>
<p>₹899</p>
<button onclick="event.stopPropagation(); addToCart('ind-2019','2019 ODI WC India Jersey',899,'images/jerseys/ind19.png',this)">Add to Cart</button>
</div>



</div>
</div>

<!-- MODAL -->
<div id="jerseyModal" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeJerseyModal()">&times;</span>
    <img id="jerseyImg">
    <h2 id="jerseyTitle"></h2>
    <p id="jerseyPrice"></p>
    <p id="jerseyDesc"></p>
    <button id="jerseyAddBtn" class="modal-cart-btn">Add to Cart</button>
  </div>
</div>

<script src="cart.js"></script>
<script src="jerseys.js"></script>
<script src="cards.js"></script>
<script src="script.js"></script>



</body>
</html>
