// Accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {panel.style.display = "none";} // Skryť   
    else {panel.style.display = "block";} // Zobraziť
  });
}
// Slider
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Zobraziť slidy
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1;}    
  if (n < 1) {slideIndex = slides.length;}
  for (i = 0; i < slides.length; i++) {slides[i].style.display = "none";} // Skryť
  slides[slideIndex-1].style.display = "block"; // Zobraziť
}