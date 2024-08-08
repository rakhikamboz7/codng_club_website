const themeToggle = document.getElementById('theme-toggle');
const body = document.body;

themeToggle.addEventListener('change', function() {
    if (this.checked) {
        body.classList.add('dark-theme');
    } else {
        body.classList.remove('dark-theme');
    }
});

// Code for the slider
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;
const sliderContainer = document.querySelector('.slider-container');

function updateSlides() {
    sliderContainer.style.transform = `translateX(-${currentSlide * 50}%)`;
}

function slideNext() {
    if (currentSlide >= totalSlides - 2) {
        currentSlide++;
        updateSlides();
        setTimeout(() => {
            sliderContainer.style.transition = 'none';
            currentSlide = 0;
            updateSlides();
            setTimeout(() => {
                sliderContainer.style.transition = 'transform 0.5s ease-in-out';
            }, 0);
        }, 500);
    } else {
        currentSlide++;
        updateSlides();
    }
}

function slidePrev() {
    if (currentSlide === 0) {
        currentSlide = totalSlides - 2;
        sliderContainer.style.transition = 'none';
        updateSlides();
        setTimeout(() => {
            sliderContainer.style.transition = 'transform 0.5s ease-in-out';
        }, 0);
    } else {
        currentSlide--;
        updateSlides();
    }
}

setInterval(slideNext, 5000); // Slide every 5 seconds
updateSlides();

