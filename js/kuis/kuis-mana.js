var form = document.getElementById("form-kuis");
form.addEventListener("submit", function (event) {
  event.preventDefault();
  calculateScore();
});

function calculateScore() {
  var score = 0;
  var answers = ["b", "c", "b", "a", "a"]; // array of correct answers

  var q1 = document.forms["form-kuis"]["q1"].value;
  var q2 = document.forms["form-kuis"]["q2"].value;
  var q3 = document.forms["form-kuis"]["q3"].value;
  var q4 = document.forms["form-kuis"]["q4"].value;
  var q5 = document.forms["form-kuis"]["q5"].value;

  if (q1 == answers[0]) {
    score++;
  }

  if (q2 == answers[1]) {
    score++;
  }

  if (q3 == answers[2]) {
    score++;
  }

  if (q4 == answers[3]) {
    score++;
  }

  if (q5 == answers[4]) {
    score++;
  }

  var scoreDisplay = document.getElementById("scoreDisplay");
  scoreDisplay.innerHTML = "Anda benar " + score + " dari " + answers.length;
}
