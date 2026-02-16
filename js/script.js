let quizStartTime=null;
let quizEndTime = null;


const questions = [
    {
      question: "Who is known as the 'God of Cricket'?",
      options: ["Virat Kohli", "Sachin Tendulkar", "MS Dhoni", "Ricky Ponting"],
      answer: "Sachin Tendulkar"
    },
    {
      question: "Which country won the first ICC Cricket World Cup?",
      options: ["Australia", "West Indies", "India", "England"],
      answer: "West Indies"
    },
    {
      question: "What is the highest individual score in an ODI match?",
      options: ["264", "200", "189", "300"],
      answer: "264"
    },
    
    {
      question: "Which player has scored the fastest century in ODI cricket?",
      options: ["AB de Villiers", "Chris Gayle", "Corey Anderson", "Virat Kohli"],
      answer: "AB de Villiers"
    },
    {
      question: "Who is the only bowler to take 10 wickets in a Test innings?",
      options: ["Jim Laker", "Anil Kumble", "Shane Warne", "Muttiah Muralitharan"],
      answer: "Jim Laker"
    },
    {
      question: "Which team has won the most ICC Cricket World Cups?",
      options: ["Australia", "India", "West Indies", "England"],
      answer: "Australia"
    },
    {
      question: "Who is the fastest bowler to reach 100 wickets in ODIs?",
      options: ["Mitchell Starc", "Rashid Khan", "Saqlain Mushtaq", "Shane Warne"],
      answer: "Rashid Khan"
    },
    {
      question: "Who scored the first double century in ODI cricket?",
      options: ["Sachin Tendulkar", "Rohit Sharma", "Virender Sehwag", "Chris Gayle"],
      answer: "Sachin Tendulkar"
    },
    {
      question: "Which player has the most runs in international cricket?",
      options: ["Ricky Ponting", "Virat Kohli", "Sachin Tendulkar", "Kumar Sangakkara"],
      answer: "Sachin Tendulkar"
    },
    {
      question: "Who is the only player to score 100 international centuries?",
      options: ["Ricky Ponting", "Virat Kohli", "Sachin Tendulkar", "Kumar Sangakkara"],
      answer: "Sachin Tendulkar"
    },
    {
      question: "Which team won the 2019 ICC Cricket World Cup?",
      options: ["India", "Australia", "England", "New Zealand"],
      answer: "England"
    },
    {
      question: "Who is the fastest batsman to score 10,000 runs in ODIs?",
      options: ["Virat Kohli", "Sachin Tendulkar", "Ricky Ponting", "AB de Villiers"],
      answer: "Virat Kohli"
    },
    
    {
      question: "Who is the highest run-scorer in T20 Internationals?",
      options: ["Virat Kohli", "Rohit Sharma", "Martin Guptill", "Ab De Villiers"],
      answer: "Virat Kohli"
    },
   
    
    {
      question: "Who is the only player to score 500 runs in a Test series?",
      options: ["Don Bradman", "Virat Kohli", "Steve Smith", "Kumar Sangakkara"],
      answer: "Don Bradman"
    },
    {
      question: "Who is the only player to score 1000 runs in a single World Cup?",
      options: ["Sachin Tendulkar", "Rohit Sharma", "Virat Kohli", "Kumar Sangakkara"],
      answer: "Sachin Tendulkar"
    },
    {
      question: "Who is the only player to score 200 in a World Cup match?",
      options: ["Martin Guptill", "Chris Gayle", "Rohit Sharma", "Aaron Finch"],
      answer: "Martin Guptill"
    },
    
    {
        question: "Which team played most IPL finals?",
        options: ["Chennai Super Kings","Royal Challengers Bangalore","Sunrisers HYderabad","Mumbai Indians"],
        answer: "Chennai Super Kings"
    },
    {
        question: "Who was the Man of the Match in 2015 ODI World Cup Final?",
        options: ["Mitchell Starc","Steve Smith","James Faulkner","Glenn Maxwell"],
        answer: "James Faulkner"
    },
    {
        question: "Who is the only captain to win three ICC Cricket World Cups?",
        options: ["Ricky Ponting", "MS Dhoni", "Clive Lloyd", "Steve Waugh"],
        answer: "Ricky Ponting"
    },
    {
        question: "Which team has won the most number of Champions Trophy?",
        options: ["Pakistan","Australia","Sri Lanka","India"],
        answer: "India"
    }
  ];
  
  let currentQuestionIndex = 0;
  let score = 0;
  let timer;
  let timeLeft;


  const soundCorrect = new Audio("sounds/correct.mp3");
  const soundWrong = new Audio("sounds/wrong.mp3");
  const soundTimeout = new Audio("sounds/timeout.mp3");
  const soundFinish = new Audio("sounds/finish.mp3");
  
// allow replay
[soundCorrect, soundWrong, soundTimeout, soundFinish].forEach(s => {
  s.preload = "auto";
});

  
  const questionElement = document.getElementById("question");
  const optionsElement = document.getElementById("options");
  const resultElement = document.getElementById("result");

  const scoreElement = document.getElementById("score");
  const timerElement = document.getElementById("timer");
  const progress = document.querySelector('.progress'); 
  
  function loadQuestion() {
  if (currentQuestionIndex === 0 && quizStartTime === null) {
    quizStartTime = Date.now();
    console.log("Quiz started at:", quizStartTime);
  }


      const currentQuestion = questions[currentQuestionIndex];
      questionElement.textContent = currentQuestion.question;
      optionsElement.innerHTML = "";
      
      currentQuestion.options.forEach(option => {
          const button = document.createElement("button");
          button.textContent = option;
          button.addEventListener("click", () => checkAnswer(option));
          optionsElement.appendChild(button);
      });
  
      // Reset timer and progress bar
      clearInterval(timer);
      timeLeft = 10;
      timerElement.textContent = `${timeLeft}s`;
      timerElement.classList.remove("timer-warning");
      progress.style.width = "100%";
  
      // Start the countdown
      timer = setInterval(() => {
          timeLeft--;
          timerElement.textContent = `${timeLeft}s`;
          progress.style.width = `${(timeLeft/10)*100}%`;
  
          if(timeLeft <= 5) {
              timerElement.classList.add("timer-warning");
          }
  
          if(timeLeft <= 0) {
              clearInterval(timer);
              soundTimeout.currentTime = 0;
              soundTimeout.play();
              resultElement.textContent = `Time's up! Correct answer was ${currentQuestion.answer}`;
              nextButton.style.display = "block";
              disableOptions();
          }
      }, 1000);
  }
  
  function disableOptions() {
      const buttons = optionsElement.querySelectorAll("button");
      buttons.forEach(button => {
          button.disabled = true;
          if(button.textContent === questions[currentQuestionIndex].answer) {
              button.classList.add("correct");
          }
      });
  }
  
  function checkAnswer(selectedOption) {
      clearInterval(timer);
      disableOptions();
      const currentQuestion = questions[currentQuestionIndex];
      if (selectedOption === currentQuestion.answer) {
          soundCorrect.currentTime = 0;
          soundCorrect.play();
          resultElement.textContent = "Correct!";
          score++;
      } else {
          soundWrong.currentTime = 0;
          soundWrong.play();
          resultElement.textContent = `Wrong! The correct answer is ${currentQuestion.answer}.`;
      }
      scoreElement.textContent = `Score: ${score}`;
      nextButton.style.display = "block";
  }
  
  function nextQuestion() {
      currentQuestionIndex++;
      timerElement.classList.remove("timer-warning");
      if (currentQuestionIndex < questions.length) {
          loadQuestion();
          resultElement.textContent = "";
          nextButton.style.display = "none";
      } else {
          endQuiz();
      }
  }

  function quitQuiz() {
    if (!confirm("Are you sure you want to quit? Your score will not be saved.")) {
    return;
  }
  clearInterval(timer);

  questionElement.textContent = "Quiz Quit!";
  optionsElement.innerHTML = "";
  resultElement.textContent =
    "You quit the quiz midway. Score will NOT be recorded.";

  nextButton.style.display = "none";
  quitButton.style.display = "none";
  restartButton.style.display = "block";
  }

  function endQuiz() {
  quizEndTime = Date.now();
  const timeTaken = Math.floor((quizEndTime - quizStartTime) / 1000);

  console.log("Quiz ended at:", quizEndTime);
  console.log("Time taken:", timeTaken);
  questionElement.textContent = "Quiz Over!";
  optionsElement.innerHTML = "";
  resultElement.textContent = `Your final score is ${score}/${questions.length}.`;
 nextButton.style.display = "none";
  restartButton.style.display = "block";
  clearInterval(timer);
  soundFinish.currentTime = 0;
  soundFinish.play();


  


  const playerName = prompt("Enter your name for the leaderboard");

  if (playerName !== null && playerName.trim() !== "") {
    let leaderboard = JSON.parse(localStorage.getItem("leaderboard"));

    if (!Array.isArray(leaderboard)) {
      leaderboard = [];
    }

    leaderboard.push({
  name: playerName,
  score: score,
  time: Math.floor((Date.now() - quizStartTime) / 1000)
});

leaderboard.sort((a, b) => {
  if (b.score !== a.score) return b.score - a.score;
  return a.time - b.time;
});

    localStorage.setItem("leaderboard", JSON.stringify(leaderboard));
  }
}


  
  function restartQuiz() {
      quizStartTime = null;
      quizEndTime = null;

      currentQuestionIndex = 0;
      score = 0;
      timerElement.classList.remove("timer-warning");
      loadQuestion();
      resultElement.textContent = "";
      scoreElement.textContent = `Score: ${score}`;
      restartButton.style.display = "none";
      progress.style.width = "100%";
  }
  
  // Event listeners
const nextButton = document.getElementById("next-button");
const restartButton = document.getElementById("restart-button");

if (nextButton && restartButton) {

  nextButton.addEventListener("click", nextQuestion);
  restartButton.addEventListener("click", restartQuiz);

}


const quitButton = document.getElementById("quit-button");

if (quitButton) {
  quitButton.addEventListener("click", quitQuiz);
}



  // Initial load
const startBtn = document.getElementById("start-btn");
const startScreen = document.getElementById("start-screen");
const quizContainer = document.getElementById("quiz-container");

if (startBtn) {
  startBtn.addEventListener("click", () => {
    startScreen.style.display = "none";
    quizContainer.style.display = "block";

    quizStartTime = Date.now(); // start timing here
    loadQuestion();
  });
}



let cart = JSON.parse(localStorage.getItem("cart")) || [];

function addToCart(name, price, image, btn) {


  // Check if item already exists
  const existingItem = cart.find(item => item.name === name);

  if (existingItem) {
    existingItem.qty += 1;
  } else {
    cart.push({
      name: name,
      price: price,
      image: image,
      qty: 1
    });
  }

  localStorage.setItem("cart", JSON.stringify(cart));
  updateCartCount();

  // Optional button feedback
  if (btn) {
    btn.textContent = "Added ✔";
    btn.disabled = true;
    btn.style.background = "#4caf50";
  }
}



function updateCartCount() {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  const countEl = document.getElementById("cart-count");
  if (countEl) {
    countEl.textContent = cart.length;
  }
}

updateCartCount();
if (document.getElementById("cart-items")) {
  console.log("Cart page detected");

  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  const cartList = document.getElementById("cart-items");
  const totalEl = document.getElementById("total");

  function renderCart() {
    cartList.innerHTML = "";
    let total = 0;

    if (cart.length === 0) {
      cartList.innerHTML = "<p>Your cart is empty 🛒</p>";
      totalEl.textContent = "";
      return;
    }

    cart.forEach((item, index) => {
      total += item.price * item.qty;

      const div = document.createElement("div");
div.className = "cart-item";

div.innerHTML = `
  <img src="${item.image}" class="cart-img">

  <div class="cart-info">
    <strong>${item.name}</strong>
    <div class="qty-controls">
      <button onclick="decreaseQty(${index})">−</button>
      <span>${item.qty}</span>
      <button onclick="increaseQty(${index})">+</button>
    </div>
  </div>

  <div class="cart-price">
    ₹${item.price * item.qty}
  </div>

  <button onclick="removeItem(${index})">❌</button>
`;



cartList.appendChild(div);

    });

    totalEl.textContent = "Total Bill: ₹" + total;
  }

  window.removeItem = function(index) {
    cart.splice(index, 1);
    localStorage.setItem("cart", JSON.stringify(cart));
    renderCart();
  };

  window.increaseQty = function(index) {
  cart[index].qty += 1;
  localStorage.setItem("cart", JSON.stringify(cart));
  renderCart();
  };

window.decreaseQty = function(index) {
  if (cart[index].qty > 1) {
    cart[index].qty -= 1;
  } else {
    cart.splice(index, 1);
  }
  localStorage.setItem("cart", JSON.stringify(cart));
  renderCart();
  };


  window.clearCart = function() {
    localStorage.removeItem("cart");
    cart = [];
    renderCart();
  };

window.checkout = function () {
  if (cart.length === 0) {
    alert("Your cart is empty!");
    return;
  }

  let total = 0;
  cart.forEach(item => total += item.price * item.qty);

  const confirmBuy = confirm(
    "Total Amount: ₹" + total + "\n\nConfirm Purchase?"
  );

  if (!confirmBuy) return;

  // 🧾 SAVE ORDER
  const orders = JSON.parse(localStorage.getItem("orders")) || [];

  orders.push({
    date: new Date().toLocaleString(),
    items: cart,
    total: total
  });

  localStorage.setItem("orders", JSON.stringify(orders));

  alert("🎉 Purchase Successful!");
  clearCart();

  
  window.location.href = "order-history.html";
};




  renderCart();
}





