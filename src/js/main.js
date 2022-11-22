import "bootstrap";

// Add your custom JS here.
document.addEventListener("DOMContentLoaded", () => {});

// Check scroll height, change global menu styles.
const mainNav = document.getElementById("main-nav");
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 500) {
    mainNav.classList.add("is-scrolled");
  } else {
    mainNav.classList.remove("is-scrolled");
  }
});
