document.addEventListener("DOMContentLoaded", function() {
  const loginSection = document.getElementById("login-section");
  const signupSection = document.getElementById("signup-section");
  const toggleButton = document.getElementById("toggle-login-signup");

  toggleButton.addEventListener("click", function() {
    if (signupSection.classList.contains("d-none")) {
      signupSection.classList.remove("d-none");
      loginSection.classList.add("d-none");
      toggleButton.textContent = "Login";
    } else {
      signupSection.classList.add("d-none");
      loginSection.classList.remove("d-none");
      toggleButton.textContent = "Signup";
    }
  });
});
