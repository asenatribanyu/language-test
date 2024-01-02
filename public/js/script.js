// Add this script to your HTML to enable dropdown functionality
document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".dropdown");

    dropdowns.forEach((dropdown) => {
        dropdown.addEventListener("mouseover", function () {
            this.querySelector(".dropdown-content").style.display = "block";
        });

        dropdown.addEventListener("mouseout", function () {
            this.querySelector(".dropdown-content").style.display = "none";
        });
    });
});
