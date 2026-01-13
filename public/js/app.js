// Basic "hamburger" menu for mobile
document.addEventListener("DOMContentLoaded", () => {
  const burger = document.querySelector("[data-burger]");
  const navLinks = document.querySelector("[data-navlinks]");

  if (burger && navLinks) {
    burger.addEventListener("click", () => {
      navLinks.classList.toggle("open");
    });
  }
});
