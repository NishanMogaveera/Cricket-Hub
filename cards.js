// ================= OPEN CARD MODAL =================
function openModal(card) {

  const id = card.dataset.id;
  const name = card.dataset.name;
  const price = card.dataset.price;
  const img = card.dataset.img;
  const desc = card.dataset.desc;

  document.getElementById("modalImg").src = img;
  document.getElementById("modalTitle").innerText = name;
  document.getElementById("modalPrice").innerText = "₹" + price;
  document.getElementById("modalDesc").innerText = desc;

  const btn = document.getElementById("modalAddBtn");

  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let exists = cart.find(item => item.id === id);

  if (exists) {
    btn.innerText = "Added ✓";
    btn.disabled = true;
    btn.style.background = "#2ecc71";
  } else {
    btn.innerText = "Add to Cart";
    btn.disabled = false;
    btn.style.background = "#f1c40f";

    btn.onclick = () => {
      addToCart(id, name, price, img, btn);
    };
  }

  document.getElementById("cardModal").style.display = "flex";
}

// ================= CLOSE MODAL =================
function closeModal() {
  document.getElementById("cardModal").style.display = "none";
}


function addToCart(id, name, price, image, btn) {

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  let item = cart.find(i => i.id === id);

  if (item) {
    item.qty += 1;
  } else {
    cart.push({
      id: id,
      name: name,
      price: Number(price),
      image: image,
      qty: 1
    });
  }

  localStorage.setItem("cart", JSON.stringify(cart));

  // modal button
  if (btn) {
    btn.innerText = "Added ✓";
    btn.disabled = true;
    btn.style.background = "#2ecc71";
  }

  // small card button
  document.querySelectorAll(".product-card").forEach(card => {
    if (card.dataset.id === id) {
      const b = card.querySelector("button");
      b.innerText = "Added ✓";
      b.disabled = true;
      b.style.background = "#2ecc71";
    }
  });
}

function alreadyAdded(id) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  return cart.some(item => item.id === id);
}

window.onload = () => {

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

};
