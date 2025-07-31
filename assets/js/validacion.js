document.querySelector("form").addEventListener("submit", function(e) {
  const email = document.querySelector("input[name='email']").value;
  if (!email.includes("@")) {
    e.preventDefault();
    alert("Por favor, ingresa un correo válido.");
  }
});