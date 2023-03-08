let container = document.getElementById("slideshow-container");

if(container) {
    let slides = container.getElementsByClassName("slide");
    let slideWidth = slides[0].offsetWidth;
    let slideIndex = 0;
    
    
    let slideshowInterval = setInterval(moveSlides, 3000);
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].addEventListener("mouseover", function() {
            clearInterval(slideshowInterval);
        });
        slides[i].addEventListener("mouseout", function() {
            slideshowInterval = setInterval(moveSlides, 3000);
        });
    }

}

function moveSlides(slideWidth, slideIndex) {
    slideIndex++;
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    container.style.left = "-" + slideIndex * slideWidth + "px";
}
