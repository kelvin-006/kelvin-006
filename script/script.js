
window.addEventListener("load", function () {
  document.getElementById("cambiarcolor").addEventListener("click", function () {
    var colorfondo = document.getElementById("colorfondo").value;
    document.getElementById("cuerpo").setAttribute("bgcolor", colorfondo);
  });
});


document.addEventListener("DOMContentLoaded", function () {
  var questions = document.querySelectorAll(".question");

  questions.forEach(function (question) {
    question.addEventListener("click", function () {
      var answer = this.nextElementSibling;
      if (answer.style.display === "block") {
        answer.style.display = "none";
      } else {
        answer.style.display = "block";
      }
    });
  });
});
