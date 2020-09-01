let hamburger = document.querySelector(".hamburger");
let mobileMenu = document.querySelector(".menu-box-ul");
// let socialLinks = document.querySelector(".social-links");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("open");
  mobileMenu.classList.toggle("showmenulist");
});

let days = document.getElementsByClassName("days");
let time = document.getElementsByClassName("time");
let date = new Date();
let currentDay = date.getDay();

switch (currentDay) {
  case 1:
    days[0].classList.add("currentday");
    time[0].classList.add("currentday");
    break;
  case 2:
    days[1].classList.add("currentday");
    time[1].classList.add("currentday");
    break;
  case 3:
    days[2].classList.add("currentday");
    time[2].classList.add("currentday");
    break;
  case 4:
    days[3].classList.add("currentday");
    time[3].classList.add("currentday");
    break;
  case 5:
    days[4].classList.add("currentday");
    time[4].classList.add("currentday");
    break;
}
