<!DOCTYPE html>
<html lang="en">

<style>
	.box_shadow_with_padding .owl-carousel button .next-slide {
		top: -14% !important;
		right: 0% !important;
	}

	.box_shadow_with_padding .owl-carousel button .prev-slide {
		top: -14% !important;
		right: 11% !important;
	}

	.owl-carousel button .next-slide {
		top: -31% !important;
		right: 1% !important;
	}

	.owl-carousel button .prev-slide {
		top: -31% !important;
		right: 6% !important;
	}
</style>

<body>
	<?php
	include "../vishalVegetables/Admin/dbconnection.php";
	// For Vegetables 
	$VegesTable = "SELECT * FROM vegetablesproducts	";
	$QueryForVeges = mysqli_query($connection, $VegesTable);

	// for fruits 
	$fruitsTabel = "SELECT * FROM fruitsproducts";
	$QueryForFruits = mysqli_query($connection, $fruitsTabel);

	// for Hearbs 
	$herbsTabel = "SELECT * FROM herbsproducts";
	$QueryForHerbs = mysqli_query($connection, $herbsTabel);
	// var_dump($fruitsData);
	?>


	<!-- header  -->
	<?php

	include_once("header.php");

	?>
	<!-- // header  -->

</body>
<!-- body  -->
<div class="container-fluid bodyContainer overflow-hidden">
	<div class="row">
		<div class="col-md-12 position-relative imgcontainer">
			<img src="./images/slider1-img1.png" class=" imageslide position-absolute s1i1" alt="">
			<img src="./images/slider1-img2.png" class=" imageslide position-absolute s1i2" alt="">
			<img src="./images/banners/bannerimage.png" class="imageslide position-absolute s1i3 animate__animated animate__fadeInDown" alt="">
			<img src="./images/slider1-img4.png" class="imageslide position-absolute s1i4 animate__animated animate__fadeInLeft" alt="">
		</div>
	</div>
</div>
<!-- best selling product  -->
<div class="row mb-4">
	<!-- offer banner  -->
	<div class="col-md-4  ">
		<div class="best_SellingofferCard d-flex flex-column justify-content-end pb-4 pl-3 ">
			<h6>FRESH FOODS</h6>
			<h4 class="green_color">Organic Food 20% off</h4>
			<h6>Get 30% off on your 1st order</h6>
		</div>
	</div>
	<!-- best_Selling vegetables cart -->
	<div class="col-md-4  ">
		<div class="box_shadow_with_padding">
			<h5>Best Selling Vegetables</h5>
			<div class="owl-carousel bestSelling owl-theme mt-4" id="">
				<div class="item text-center best_Selling_vegetables_1"></div>
				<div class="item text-center best_Selling_vegetables_1"></div>
			</div>

		</div>
	</div>
	<!-- best_Selling fruits cart -->
	
	<div class="col-md-4  ">
		<div class="box_shadow_with_padding">
			<h5>Best Selling Fruits</h5>
			<div class="owl-carousel bestSelling owl-theme mt-4">
				<div class="item text-center bestSellingFruits_1"></div>
				<div class="item text-center bestSellingFruits_2"></div>
			</div>
		</div>
	</div>
</div>

<!-- vegetables categray carousel  -->
<div class="container-fluid mb-5">
	<div class="mb-3 pb-2 pt-3 mt-3 px-3 row" style="background-color: #f7f7f7;">
		<div class="col-md-12 " style="line-height: 50px;">
			<h3 class="selectedCategry">Vegetables <a href="./vegetables.php" class="small" style="color: #797979c7;">( View All )</a></h3>
		</div>
	</div>

	<div class="owl-carousel owl-theme my-4 productCarousel" id="owl_carousel_vegetables">
		<?php while ($vegetablesData = $QueryForVeges->fetch_assoc()) {	?>
			<div class="item p-2">
				<div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border">

					<img src="./tempImg/vegetables/<?php echo $vegetablesData['productImage'] ?>" alt="" class="mx-auto" style=" border-radius: 9px; width:175px; height: 135px;">
					<div class="d-flex">
						<h4 class="h5 pl-3 pr-2"><?php echo $vegetablesData['productName'] ?></h4>
						<p class="green_color mb-1 weight text-muted">( <?php echo $vegetablesData['productWeight'] ?> ) </p>
					</div>
					<div class="align-items-center d-flex justify-content-between px-4 mb-2">
						<div class="">
							<h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i><?php echo $vegetablesData['productPrice'] ?></span></span></h5>
						</div>
						<button class="border-secondary btn btn-sm green_bgcolor px-4 text-light productAddBtn" id='productAddBtn_<?php echo $vegetablesData['productId'] ?>' type="button" style="letter-spacing: 1px;" onclick="addProduct('productAddBtn_<?php echo $vegetablesData['productId'] ?>', 
						'productAddCount<?php echo $vegetablesData['productId'] ?>', 'ProductNumber_<?php echo $vegetablesData['productId'] ?>')">Add</button>

						<div class="align-items-center productAddCount d-flex" id="productAddCount<?php echo $vegetablesData['productId'] ?>">
							<button onclick="decreaseProduct('productAddCount<?php echo $vegetablesData['productId'] ?>','productAddBtn_<?php echo $vegetablesData['productId'] ?>','ProductNumber_<?php echo $vegetablesData['productId'] ?>','fa-minus_<?php echo $vegetablesData['productId'] ?>')" class="border-secondary btn btn-sm green_bgcolor px-1 py-0 text-light " type="button" style="letter-spacing: 1px;"><span><i class="fa-solid fa-trash text-white" id="fa-minus_<?php echo $vegetablesData['productId'] ?>"></i></span></button>
							<h6 id="ProductNumber_<?php echo $vegetablesData['productId'] ?>" class="mb-0 text-center" style="width: 30px;">1</h6>
							<button onclick="increaseProduct('ProductNumber_<?php echo $vegetablesData['productId'] ?>')" class="border-secondary btn btn-sm green_bgcolor px-1 py-0" type="button" style="letter-spacing: 1px;"><span><i class="fa-solid fa-plus text-white"></i></span></button>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
		?>

	</div>
</div>
<div class="container-fluid mb-5">
	<div class="mb-3 pb-2 pt-3 mt-3 px-3 row" style="background-color: #f7f7f7;">
		<div class="col-md-12 " style="line-height: 50px;">
			<h3 class="selectedCategry">Fruits <a href="./vegetables.php" class="small" style="color: #797979c7;">( View All )</a></h3>
		</div>
	</div>
	<div class="owl-carousel owl-theme my-4 productCarousel" id="owl_carousel_fruits">
		<?php while ($fruitsData = $QueryForFruits->fetch_assoc()) { ?>
			<div class="item p-2">
				<div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border">
					<img src="./tempImg/fruits/<?php echo $fruitsData['productImage'] ?>" alt="" class="mx-auto" style=" border-radius: 9px; width:175px; height: 135px;">
					<div class="d-flex">
						<h4 class="h5 pl-3 pr-2"><?php echo $fruitsData['productName'] ?></h4>
						<p class="green_color mb-1 weight text-muted">( <?php echo $fruitsData['productWeight'] ?> ) </p>

					</div>
					<div class="align-items-center d-flex justify-content-between px-4 mb-2">
						<div class="">
							<h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i><?php echo $fruitsData['productPrice'] ?></span></span></h5>
						</div>
						<button class="border-secondary btn btn-sm green_bgcolor px-4 text-light" type="button" style="letter-spacing: 1px;">Add</button>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<div class="container-fluid mb-5">
	<div class="mb-3 pb-2 pt-3 mt-3 px-3 row" style="background-color: #f7f7f7;">
		<div class="col-md-12 " style="line-height: 50px;">
			<h3 class="selectedCategry">Herbs <a href="./vegetables.php" class="small" style="color: #797979c7;">( View All )</a></h3>
		</div>
	</div>

	<div class="owl-carousel owl-theme my-4 productCarousel" id="owl_carousel_hearbs">
		<?php while ($herbsData = $QueryForHerbs->fetch_assoc()) { ?>
			<div class="item p-2">
				<div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border">
					<img src="./tempImg/hearbs/<?php echo $herbsData['productImage'] ?>" alt="" class="mx-auto" style=" border-radius: 9px; width:175px; height: 135px;">
					<div class="d-flex">
						<h4 class="h5 pl-3 pr-2"><?php echo $herbsData['productName'] ?></h4>
						<p class="green_color mb-1 weight text-muted">( <?php echo $herbsData['productWeight'] ?> ) </p>
					</div>
					<div class="align-items-center d-flex justify-content-between px-4 mb-2">
						<div class="">
							<h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i><?php echo $herbsData['productPrice'] ?></span></span></h5>
						</div>
						<button class="border-secondary btn btn-sm green_bgcolor px-4 text-light" type="button" style="letter-spacing: 1px;">Add</button>
					</div>
				</div>
			</div>
		<?php } ?>

	</div>
</div>

<!--mobile app  application section  -->
<div class="container-fluid mb-5" style="height:450px;">
	<div class="row">
		<div class="col-md-6 position-relative">
			<div class="text-center ">
				<!-- <img src="./images/mobile_Screenshot_2.png" style="width: 27%;left: 16%; top:3%;max-width: 180px;" class="position-absolute" alt="">
				<img src="./images/mobile_Screenshot_3.png" style="width: 27%;right: 16%; top:3%;max-width: 180px;" class="position-absolute" alt="">
				<img src="./images/mobile_Screenshot_1.png" style="width: 27%;left: 37.5%;top: 10%;max-width: 180px;" class="position-absolute" alt=""> -->
				<img src="./images/mobileAppImage.png" class="w-75" alt="">
			</div>
		</div>
		<div class="col-md-6 pt-5">
			<h1 style="border-radius: 2.7rem;" class="text-center">DOWNLODE THE APP</h1>
			<p class="mx-auto text-center w-75">Enter your phone number to receive a text with a link to download the app</p>
			<div class="badge-pill border border-secondary d-flex justify-content-center mx-auto px-1 py-1" style="width: 279px;">
				<div class="green_bgcolor border appstore border-secondary" id="playStore" style="animation-duration: .5s !important;">
					<span class=""><i class="fa-brands fa-google-play text-dark"></i></span><span class="pl-2 text-dark">Play Store</span>
				</div>
				<div class="appstore" id="appleStore" style="animation-duration: .5s !important; ">
					<span><i class="fa-brands fa-apple text-dark" style="font-size: larger;"></i></span><span class="pl-2 text-dark">Apple Store</span>
				</div>
			</div>
			<input type="text" placeholder="Enter Your Mobile Number..." class="mx-auto w-75 badge-pill border-secondary form-control mt-4 px-4 py-2">
			<div class="mt-4 text-center">
				<button class="btn btn-sm green_bgcolor px-3 text-light" style="letter-spacing: .6px;">Submit</button>
			</div>
		</div>
	</div>
</div>

<!-- footer  -->
<?php include_once("footer.php") ?>
<!-- <?php include_once("Header.php")?>
<?php include_once("Header.php")?>
<?php  ?> -->

<!-- // body  -->
<!-- scripts -->

<!-- custom javascript link  -->
<script src="./js/javascript.js"></script>
<!-- boostrap javascript cdn  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- jquery cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- owl carousel cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
	$('.bestSelling').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		navText: ["<div class='align-items-center d-flex justify-content-center px-2 nav-btn prev-slide prenavigate'> <i class='fa-solid fa-caret-left'></i></div>", "<div class='align-items-center d-flex justify-content-center px-2 nav-btn next-slide postnavigate'> <i class='fa-solid fa-caret-right'></i></div>"],

		autoplay: false,
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
				items: 1
			},
			1024: {
				items: 1
			},

		}
	});
	$('.productCarousel').owlCarousel({
		loop: true,
		// margin: 10,
		padding: 10,
		nav: true,
		navText: ["<div class='align-items-center d-flex justify-content-center px-2 nav-btn prev-slide prenavigate'> <i class='fa-solid fa-caret-left'></i></div>", "<div class='align-items-center d-flex justify-content-center px-2 nav-btn next-slide postnavigate'> <i class='fa-solid fa-caret-right'></i></div>"],

		autoplay: false,
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
			},
			1440: {
				items: 5
			}
		}
	});
</script>
scr

</html>