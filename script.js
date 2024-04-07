// script.js

document.addEventListener("DOMContentLoaded", function() {
    const hamburgerIcon = document.querySelector(".hamburger-icon");
    const navbar2 = document.querySelector(".navbar2");

    // Add event listener to hamburger icon
    hamburgerIcon.addEventListener("click", function() {
        // Toggle a CSS class on navbar2 to show/hide it
        navbar2.classList.toggle("show-navbar2");
    });
});
