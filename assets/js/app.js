let hamburger = document.querySelector(".hamburger");
let mobileMenu = document.querySelector(".menu-box-ul");
// let socialLinks = document.querySelector(".social-links");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("open");
  mobileMenu.classList.toggle("show");
});
