function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    var toggleIcon = document.querySelector(".toggle-password");
  
    if (passwordField.type === "password") {
      passwordField.type = "text";
      toggleIcon.classList.remove("fa-eye-slash");
      toggleIcon.classList.add("fa-eye");
    } else {
      passwordField.type = "password";
      toggleIcon.classList.remove("fa-eye");
      toggleIcon.classList.add("fa-eye-slash");
    }
  }

function trocarCursor() {
    var elemento = document.getElementsByClassName("meu-elemento")[0];
    elemento.style.cursor = "url(../DSADAS/IMAGENS/FSDFSDFSDFSD.png), auto";
}