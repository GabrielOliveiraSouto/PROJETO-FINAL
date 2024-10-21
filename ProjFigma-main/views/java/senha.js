var voltarBtn = document.getElementById("voltarBtn");
voltarBtn.addEventListener("click", function() {
    window.location.href = "enviado.html";
});

  var audio = document.getElementById("myAudio");

  var button = document.getElementById("voltarBtn");

  button.addEventListener("click", function() {

    audio.play();
  });