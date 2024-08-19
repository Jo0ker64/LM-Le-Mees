document.addEventListener("DOMContentLoaded", function() {
    var hamburger = document.querySelector(".hamburger");
    var navbarLinks = document.querySelector(".navbar-links");

    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("active");
        navbarLinks.classList.toggle("show");
    });
});
