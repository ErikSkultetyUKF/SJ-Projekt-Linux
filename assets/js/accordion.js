// Accordion
var acc = document.getElementsByClassName("accordion-button");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("accordion-active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {panel.style.display = "none";} // Skryť   
    else {panel.style.display = "block";} // Zobraziť
  });
}