const body = document.getElementById("leaderboard-body");

if (!body) {
  console.error("leaderboard-body not found");
} else {
  let leaderboard = JSON.parse(localStorage.getItem("leaderboard")) || [];

  // ✅ Safe sorting: score DESC, time ASC
  leaderboard.sort((a, b) => {
    if (b.score !== a.score) {
      return b.score - a.score;
    }
    return (a.time ?? Infinity) - (b.time ?? Infinity);
  });

  leaderboard.forEach((player, index) => {
    const row = document.createElement("tr");

    // ✅ Format time as mm:ss
    let timeDisplay = "-";
    if (typeof player.time === "number") {
      const minutes = Math.floor(player.time / 60);
      const seconds = player.time % 60;
      timeDisplay = `${minutes}:${seconds.toString().padStart(2, "0")}`;
    }

    row.innerHTML = `
      <td>${index + 1}</td>
      <td>${player.name}</td>
      <td>${player.score}</td>
      <td>${timeDisplay}</td>
    `;

    body.appendChild(row);
  });
}
