// Zobraziť slidy
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slideshow-img");
    if (n > slides.length) {slideIndex = 1;}    
    if (n < 1) {slideIndex = slides.length;}
    for (i = 0; i < slides.length; i++) {slides[i].style.display = "none";} // Skryť
    slides[slideIndex-1].style.display = "block"; // Zobraziť
  }
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  // Slider
  let slideIndex = 1;
  showSlides(slideIndex);