import "bootstrap";
import * as tocbot from "tocbot";

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

document.addEventListener("DOMContentLoaded", () => {
  const h2s = document.querySelectorAll(".entry-content h2");
  const h3s = document.querySelectorAll(".entry-content h3");
  h2s.forEach((heading, index) => {
    heading.setAttribute("id", "h2-" + index);
  });
  h3s.forEach((heading, index) => {
    heading.setAttribute("id", "h3-" + index);
  });
  tocbot.init({
    tocSelector: ".js-toc",
    contentSelector: ".entry-content",
    eadingSelector: "h2, h3",
    headingsOffset: 70,
    scrollSmoothOffset: -70,
    scrollSmoothDuration: 100,
  });
  setInterval(tocbot.refresh(), 2000);
});
