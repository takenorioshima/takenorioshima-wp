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

// tocbot.js
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
    scrollSmoothDuration: 10,
  });
  setInterval(tocbot.refresh(), 2000);
});

// flip-titles
document.addEventListener("DOMContentLoaded", () => {
  const titles = document.querySelectorAll(".flip-titles > div");
  let index = 0;
  let index_inactive = 0;
  setInterval(addActiveClass, 1000);
  function addActiveClass() {
    titles.forEach((element) => {
      element.classList.remove("active", "inactive");
    });
    if (index === 0) {
      index_inactive = titles.length - 1;
    } else {
      index_inactive = index - 1;
    }
    titles[index].classList.add("active");
    titles[index_inactive].classList.add("inactive");
    if (index < titles.length - 1) {
      index++;
    } else {
      index = 0;
    }
  }
});
