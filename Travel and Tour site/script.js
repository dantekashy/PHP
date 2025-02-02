let menu = document.querySelector(".menu");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
    navbar.classList.toggle("active");
};
