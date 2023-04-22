const navButton = document.querySelector("button.mobile-menu-button");
const navMenu = document.querySelector(".mobile-navigation");

navButton.addEventListener("click", () => {
  navMenu.classList.toggle("hidden");
});
