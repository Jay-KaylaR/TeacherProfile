// assets/js/main.js

document.addEventListener("DOMContentLoaded", () => {
  // Smooth scroll for navigation links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth"
      });
    });
  });

  // Optional: auto-hide alert messages after 5s
  const alert = document.querySelector(".alert");
  if (alert) {
    setTimeout(() => {
      alert.classList.remove("show");
    }, 5000);
  }
});
