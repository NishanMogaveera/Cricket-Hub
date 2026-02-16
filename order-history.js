let orders = JSON.parse(localStorage.getItem("orders")) || [];

const container = document.getElementById("order-list");

if (orders.length === 0) {
  container.innerHTML = "<p>No orders found</p>";
} else {

  [...orders].reverse().forEach((order,index) => {

    let html = `
      <div class="order-box">
        
        
        <h3>Order ID: ${order.id}</h3>
        <p>Order Date: ${order.date}</p>
        <p><b>Total:</b> ₹${order.total}</p>
        <ul>
    `;

    order.items.forEach(item => {
      html += `
        <li>
          ${item.name} × ${item.qty}
          — ₹${item.price * item.qty}
        </li>
      `;
    });

    html += `
        </ul>
      </div>
    `;

    container.innerHTML += html;
  });
}
