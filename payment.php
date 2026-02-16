<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <link rel="stylesheet" href="css/style.css">
  <style>

    body {
      background: #0a1026;
      font-family: Arial;
    }

    .payment-box {
      width: 420px;
      margin: 60px auto;
      background: #141b3a;
      border-radius: 18px;
      padding: 25px;
      color: white;
      box-shadow: 0 0 30px rgba(0,0,0,0.6);
    }

    .payment-box h2 {
      margin-bottom: 20px;
    }

    .pay-option {
      background: #1c2550;
      padding: 15px;
      border-radius: 12px;
      margin-bottom: 12px;
      cursor: pointer;
      border: 2px solid transparent;
    }

    .pay-option.active {
      border-color: #6c7bff;
      background: #222c66;
    }

    .pay-option small {
      color: #bbb;
    }

    .total-box {
      margin-top: 20px;
      font-size: 18px;
      text-align: right;
    }

    .confirm-btn {
      width: 100%;
      padding: 14px;
      margin-top: 20px;
      background: #3b82f6;
      border: none;
      color: white;
      border-radius: 12px;
      font-size: 16px;
      cursor: pointer;
    }

    .confirm-btn:hover {
      background: #2563eb;
    }

    .pay-input {
  width: 100%;
  padding: 12px;
  background: #1c2550;
  border: none;
  border-radius: 10px;
  color: white;
  margin-top: 5px;
  }

  .pay-input.half {
  width: 48%;
  }

  #pay-details {
  margin: 12px 0 18px 0;
  }

  .pay-details {
  display: none;
  margin: 12px 0 18px 0;
  }

  .pay-details input {
  width: 100%;
  padding: 12px;
  margin-top: 10px;
  border-radius: 10px;
  border: none;
  background: #1c2550;
  color: white;
  }

  .row {
  display: flex;
  gap: 10px;
  }




  </style>
</head>

<body>

<div class="payment-box">

  <h2>💳 Payment</h2>

  <!-- CARD -->
<div class="pay-option" onclick="selectPay('card')">
  <b>Credit / Debit Card</b><br>
  <small>Visa, Mastercard, RuPay</small>
</div>

<div id="card-details" class="pay-details">
  <input type="text" placeholder="Cardholder Name">
  <input type="text" placeholder="Card Number (16 digits)">
  <div class="row">
    <input type="text" placeholder="MM/YY">
    <input type="text" placeholder="CVV">
  </div>
</div>

<!-- UPI -->
<div class="pay-option" onclick="selectPay('upi')">
  <b>UPI</b><br>
  <small>Pay using UPI ID</small>
</div>

<div id="upi-details" class="pay-details">
  <input type="text" placeholder="Enter UPI ID (example@upi)">
  <small>You will be redirected to your UPI app</small>
</div>

<!-- COD -->
<div class="pay-option" onclick="selectPay('cod')">
  <b>Cash on Delivery</b><br>
  <small>Pay when order arrives</small>
</div>



  <!-- PAYMENT DETAILS -->
  <div id="pay-details" style="margin-top:15px;"></div>


  <div class="total-box">
    Subtotal: ₹<span id="subtotal">0</span><br>
    XP Discount: ₹0<br>
    <b>Payable: ₹<span id="payable">0</span></b>
  </div>

  <button class="confirm-btn" onclick="confirmOrder()">
    Confirm Order
  </button>

</div>



<script>
  function selectPay(el) {
    document.querySelectorAll('.pay-option')
      .forEach(o => o.classList.remove('active'));
    el.classList.add('active');
  }

  // load totals
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let total = 0;

  cart.forEach(i => total += i.price * i.qty);

  document.getElementById("subtotal").innerText = total;
  document.getElementById("payable").innerText = total;
</script>

<script>
function confirmOrder() {

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  if (cart.length === 0) {
    alert("Cart empty");
    return;
  }

  let orders = JSON.parse(localStorage.getItem("orders")) || [];

  let order = {
    id: "ORD-" + Date.now(),
    date: new Date().toLocaleString(),
    items: cart,
    total: cart.reduce((t, i) => t + (i.price * i.qty), 0)
  };

  orders.push(order);

  localStorage.setItem("orders", JSON.stringify(orders));
  localStorage.removeItem("cart");

  window.location.href = "payment-success.html";
}

</script>

<script>
function selectPay(type) {

  // remove active highlight
  document.querySelectorAll('.pay-option').forEach(o =>
    o.classList.remove('active')
  );

  // hide all details
  document.querySelectorAll('.pay-details').forEach(d =>
    d.style.display = "none"
  );

  if (type === "card") {
    document.getElementById("card-details").style.display = "block";
    document.querySelectorAll(".pay-option")[0].classList.add("active");
  }

  if (type === "upi") {
    document.getElementById("upi-details").style.display = "block";
    document.querySelectorAll(".pay-option")[1].classList.add("active");
  }

  if (type === "cod") {
    document.querySelectorAll(".pay-option")[2].classList.add("active");
  }
}
</script>



</body>
</html>