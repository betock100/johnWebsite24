// script.js

document.addEventListener("DOMContentLoaded", function() {
    // Add event listeners or functions for dynamic navigation here
    // For example:
    const navLinks = document.querySelectorAll(".navLinks > div");
    navLinks.forEach(link => {
        link.addEventListener("click", function() {
            // Handle navigation logic here
            const pageName = this.textContent.toLowerCase().replace(/\s/g, "");
            window.location.href = pageName + ".html"; // Assuming each page corresponds to a separate HTML file
        });
    });
});
