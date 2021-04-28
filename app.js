// var slideIndex = 1;
// showSlides(slideIndex);

// // Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
// }

var expandDiv = document.getElementById("expand");
var speed = 3;

function expanding() {
  console.log("HELLOOOOO");
  var scrolltop = window.pageYOffset; // get number of pixels document has scrolled vertically
  var scrollAndSpeed = (scrolltop / speed);
  //Expand using transform
  //expandDiv.style.transform = "scalex( " + Math.min(Math.max(scrollAndSpeed, 1), 10) + ")";
  
  //Or using width
  expandDiv.style.width = Math.min(Math.max(scrollAndSpeed, 20), 95) + "%";

}

window.addEventListener('scroll', function() { // on page scroll
  requestAnimationFrame(expanding); // call parallaxing()
}, false);