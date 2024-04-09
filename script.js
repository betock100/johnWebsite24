// script.js

document.addEventListener("DOMContentLoaded", function() {
    const hamburgerIcon = document.querySelector(".hamburger-icon");
    const navbar2 = document.querySelector(".navbar2");
    const closeButton = document.querySelector(".close-button");

    // Add event listener to hamburger icon
    hamburgerIcon.addEventListener("click", function() {
        // Toggle a CSS class on navbar2 to show/hide it
        navbar2.classList.toggle("show-navbar2");

        // toggle a css class on close button to show/hide it
        closeButton.classList.toggle("show-close-button");

        hamburgerIcon.classList.toggle("hide-hamburger");
    });

    closeButton.addEventListener("click", function() {
        navbar2.classList.remove("show-navbar2");

        closeButton.classList.remove("show-close-button");

        hamburgerIcon.classList.remove("hide-hamburger");
    })
});
