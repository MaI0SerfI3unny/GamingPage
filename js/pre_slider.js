var slides = document.querySelectorAll('#sliders .sliderin');
var currentSlide = 0;
var sliderinInterval = setInterval(nextSlide,4000);

function nextSlide() {
  slides[currentSlide].className = 'sliderin';
  currentSlide = (currentSlide+1)%slides.length;
  slides[currentSlide].className = 'sliderin showingr';
}
