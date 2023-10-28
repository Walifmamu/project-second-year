// Get the elements
var aboutButton = document.getElementById("about-button");
var projectsButton = document.getElementById("projects-button");
var contactButton = document.getElementById("contact-button");
var aboutSection = document.getElementById("about");
var projectsSection = document.getElementById("projects");
var contactSection = document.getElementById("contact");

// Add click event listeners to the buttons
aboutButton.addEventListener("click", function() {
    aboutSection.style.display = "block";
    projectsSection.style.display = "none";
    contactSection.style.display = "none";
});

projectsButton.addEventListener("click", function() {
    aboutSection.style.display = "none";
    projectsSection.style.display = "block";
    contactSection.style.display = "none";
});

contactButton.addEventListener("click", function() {
    aboutSection.style.display = "none";
    projectsSection.style.display = "none";
    contactSection.style.display = "block";
});