let hamburger = document.querySelector(".hamburger");
let mobileMenu = document.querySelector(".menu-box-ul");
// let socialLinks = document.querySelector(".social-links");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("open");
  mobileMenu.classList.toggle("showmenulist");
});

let overviewTab = document.querySelector(".page-tab-11");
let curriculumTab = document.querySelector(".page-tab-12");
let overviewContent = document.querySelector(".overview");
let curriculumContent = document.querySelector(".curriculum");

curriculumTab.addEventListener("click", () => {
  curriculumTab.classList.add("active-tab");
  overviewTab.classList.remove("active-tab");
  overviewContent.style.display = "none";
  curriculumContent.style.display = "block";
});

overviewTab.addEventListener("click", () => {
  curriculumTab.classList.remove("active-tab");
  overviewTab.classList.add("active-tab");
  overviewContent.style.display = "block";
  curriculumContent.style.display = "none";
});
