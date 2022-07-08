<!DOCTYPE html>
<html lang="en">

<!-- header  -->
<?php include_once("header.php")?>
<body>
    <!-- body  -->
	<div class="container-fluid vegetablesPageBanner" style="height: 60vh;">

	</div>
    <div class="container-fluid bodyContainer" style="padding-top: 80px;">
        <div class="mb-3 pb-2 pt-3 mt-1 px-5 row" style="background-color: #f7f7f7;">
            <div class="col-md-12 " style="line-height: 50px;">
                <h3 class="selectedCategry">Fresh Vegetables</h3>
            </div>
        </div>
        <div class="row px-5">
            <div class="col-md-3 ">
                <h5 class="product_categry">Product CAtegories</h5>
                <ul class="product_categryList mb-0 categryFilter">
                    <li>Cut & Sprouts</li>
                    <li>Fresh Vegtables
                        <ul>
                            <li>leafy vegetables</li>
                            <li>Cruciferous</li>
                            <li>Marrow</li>
                            <li>Root</li>
                            <li>Allium</li>
                        </ul>
                    </li>
                    <li>Fruits
                        <ul>
                            <li>Berries</li>
                            <li>Melons</li>
                            <li>Citrus Fruits</li>
                            <li>Drupes</li>
                            <li>Pomes</li>
                            <li>Tropical Fruits</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-9" style="background-color: #f7f7f7;">
                <img src="./images/banner-lising.png " alt="">
            </div>
        </div>
    </div>
    <div class=" owl-theme my-4" id="owl_carousel_vegetables">
		<div class="item text-center">
			<img src="./images/2-watermelon.jpg" alt="" width="300px">
			<h4 class="categryName">Fresh Vegetables</h4>
		</div>
		<div class="item text-center">
			<img src="./images/2-watermelon.jpg" width="300px" alt="">
			<h4 class="categryName">Fresh Vegetables</h4>
		</div>
		<div class="item text-center">
			<img src="./images/2-watermelon.jpg" width="300px" alt="">
			<h4 class="categryName">Fresh Vegetables</h4>
		</div>
		<div class="item text-center">
			<img src="./images/2-watermelon.jpg" alt="">
			<h4 class="categryName">Fresh Vegetables</h4>
		</div>
		<div class="item text-center">
			<img src="./images/2-watermelon.jpg" alt="">
			<h4 class="categryName">Fresh Vegetables</h4>
		</div>
		<div class="item text-center">
			<img src="./images/2-watermelon.jpg" alt="">
			<h4 class="categryName">Fresh Vegetables</h4>
		</div>
	</div>
    <!-- // body  -->
    <script>
        	$('#owl_carousel_vegetables').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		navText: ["<div class='align-items-center d-flex justify-content-center px-2 nav-btn prev-slide prenavigate'> <i class='fa-solid fa-caret-left'></i></div>", "<div class='align-items-center d-flex justify-content-center px-2 nav-btn next-slide postnavigate'> <i class='fa-solid fa-caret-right'></i></div>"],

		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 1300,
		responsive: {
			0: {
				items: 1
			},
			500: {
				items: 1
			},
			768: {
				items: 3
			},
			1024: {
				items: 4
			}
		}
	});

    </script>
</body>
</html>