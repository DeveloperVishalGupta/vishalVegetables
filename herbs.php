<!DOCTYPE html>
<html lang="en">

<!-- header  -->
<?php include_once("header.php") ?>

<body>
	<!-- body  -->
	<div class="container-fluid HerbsPageBanner" style="height: 60vh;">
		<div class="BannerOfferbg p-3">

		</div>
		<div class="position-relative" style="height: 55vh;">
			<div class="position-absolute vegetablesbannerBGBlur"></div>
			<div class="vegetablesBannerOffer d-flex flex-column justify-content-end pl-3 position-absolute px-4 py-4 text-light">
				<h4 class="text-uppercase">FRESH Herbs</h4>
				<h1 class="green_color">Organic Food 20% off</h1>
				<h4>Get 30% off on your 1st order</h4>
			</div>
		</div>


	</div>
	<div class="mb-3 pb-2 pt-3 mt-3 px-5 row" style="background-color: #f7f7f7;">
		<div class="col-md-12 " style="line-height: 50px;">
			<h3 class="selectedCategry">Fresh Herbs</h3>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row" id="AllVegetable">
			<div class="col-md-4 col-lg-3">
				<div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border pb-2 text-center">
					<img src="./images/cat-img4.jpg" alt="" style=" width:250px;" style=" border-radius: 9px;">
					<div class="d-flex">
						<h4 class="h5 pl-3 pr-2">Watermelon</h4>
						<p class="green_color mb-1 weight text-muted">( 500 gm ) </p>

					</div>
					<div class="align-items-center d-flex justify-content-between px-4">
						<div class="">
							<h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i>100</span></span></h5>
						</div>
						<button class="border-secondary btn btn-sm green_bgcolor px-4 text-light" type="button" style="letter-spacing: 1px;">Add</button>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- // body  -->
	<?php include_once("footer.php") ?>
	<script src="./js/javascript.js"></script>
</body>

</html>