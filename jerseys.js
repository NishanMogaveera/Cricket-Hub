function openJerseyModal(card) {

  const id = card.dataset.id;
  const name = card.dataset.name;
  const price = card.dataset.price;
  const img = card.dataset.img;
  const desc = card.dataset.desc;

  document.getElementById("jerseyImg").src = img;
  document.getElementById("jerseyTitle").innerText = name;
  document.getElementById("jerseyPrice").innerText = "₹" + price;
  document.getElementById("jerseyDesc").innerText = desc;

  const btn = document.getElementById("jerseyAddBtn");

  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  const exists = cart.find(item => item.id === id);

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

  document.getElementById("jerseyModal").style.display = "flex";
}

function closeJerseyModal() {
  document.getElementById("jerseyModal").style.display = "none";
}
