<div id="slideshow">
	<div id="slideshow-container">
		<a href="?controller=livre&action=all_livres">
			<img src="Content/img/1.jpg" alt="Image 1" class="slide">
			<img src="Content/img/2.jpg" alt="Image 2" class="slide">
			<img src="Content/img/3.jpg" alt="Image 3" class="slide">
			<img src="Content/img/4.jpg" alt="Image 4" class="slide">
			<img src="Content/img/5.jpg" alt="Image 5" class="slide">
			<img src="Content/img/6.jpg" alt="Image 6" class="slide">
			<img src="Content/img/7.jpg" alt="Image 7" class="slide">
		</a>
	</div>
</div>



<style>

</style>

<script>
	var slides = document.querySelectorAll('#slideshow .slide');
	var currentSlide = 0;
	var slideInterval = setInterval(nextSlide, 5000);

	function nextSlide() {
		slides[currentSlide].classList.remove('active');
		currentSlide = (currentSlide + 1) % slides.length;
		slides[currentSlide].classList.add('active');
	}
</script>