

// ================= ADD TO CART =================
function addToCart(id, name, price, image, btn) {

  


  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  let existing = cart.find(item => item.id === id);

  if (!existing) {
    cart.push({
      id: id,
      name: name,
      price: Number(price),
      image: image,
      qty: 1
    });
  }

  localStorage.setItem("cart", JSON.stringify(cart));

  // update all buttons
  updateButtons(id);

  // update modal button
  if (btn) {
    btn.innerText = "Added ✓";
    btn.disabled = true;
    btn.style.background = "#2ecc71";
  }
}

// ================= UPDATE SMALL CARDS =================
function updateButtons(id) {
  document.querySelectorAll(".product-card").forEach(card => {
    if (card.dataset.id === id) {
      const btn = card.querySelector("button");
      if (btn) {
        btn.innerText = "Added ✓";
        btn.disabled = true;
        btn.style.background = "#2ecc71";
      }
    }
  });
}

// ================= PAGE LOAD =================
window.addEventListener("load", () => {

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  document.querySelectorAll(".product-card").forEach(card => {

    const id = card.dataset.id;
    const btn = card.querySelector("button");

    if (cart.some(item => item.id === id)) {
      btn.innerText = "Added ✓";
      btn.disabled = true;
      btn.style.background = "#2ecc71";
    }
  });
});

function confirmOrder() {

  let cart = JSON.parse(localStorage.getItem("cart"));

  if (!cart || cart.length === 0) {
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

  console.log("ORDER SAVED:", orders); // 🔥 IMPORTANT

  alert("✅ Order placed successfully!");

  window.location.href = "order-history.html";
}
