<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- links -->
	<!-- custom style link  -->
	<link rel="stylesheet" href="./css/style.css">

	<!-- animated css  -->
	<!-- <link rel="stylesheet" href="./node_modules/animate.css/animate.css"> -->
	<!-- boostrap css link  -->
	<!-- <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="./boostrap/css/bootstrap.css">

	<!-- animate.js cdn  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- font awosome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- owlcarousel css  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- iziTost css  -->
	<link rel="stylesheet" href="./node_modules/izitoast/dist/css/iziToast.min.css">

	<!-- jquery cdn link  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<style>
		::placeholder {
			font-style: italic;
		}
	</style>
</head>

<body>
	<div class=" menu1">
		<div class="row shadow menu">
			<div class="col-md-2">
				<div class="logo text-center">
					<a href="./index.php"><img src="./images/logo.png" style="width: 45%;" alt="Vishal"></a>
				</div>
			</div>
			<div class="col-md-10 pr-0">
				<div class="row  upperHeader" style="height: 40px;">
					<div class="align-items-center col-md-12 d-flex justify-content-between pl-5 pr-4">
						<div class="conntact d-flex">
							<div class="contactNumber mr-4">
								<span class="mr-2"><a href="#" style="text-decoration: none ;"><i class="fa-solid fa-phone text-light"></i></span><span class="text-light">+91 9320206598</a></span>
							</div>
							<div class="contactEmail">
								<span class="mr-2"><i class="fa-solid fa-paper-plane text-light"></i></span><span class="text-light">vishalvvramasare@gmail.com</span>
							</div>
						</div>
						<div class=" login px-2 py-1 rounded">
							<span class="text-light">Login</span><span class="ml-2"><i class="fa-solid text-light fa-right-to-bracket arrowBracket"></i></span>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="offset-3 col-md-9">
						<ul class="align-items-center d-flex justify-content-around list-unstyled mb-0 menuList" style="height: 40px;">
							<!-- menu listing  -->
							<li><a href="#">HOME</a></li>
							<li><a href="#">ABOUT US</a></li>
							<li><a href="#">BLOG</a></li>
							<li><a href="#">SHOP</a></li>
							<li><a href="#">FRUITS</a></li>
							<li><a href="#">CONNECT US</a></li>
							<li>
								<a href="#"><span><i class="fa-regular fa-heart" style=" font-size: large;"></i></span></a>
								<a href="#" class="px-3"><span ><i class="fa-solid fa-bag-shopping" id="cartIcon" style=" font-size: large;"></i></span></a>
								<a href="#"><span><i class="fa-solid fa-magnifying-glass" style=" font-size: large;"></i></span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="container-fluide"> -->
	<div class="position-absolute row w-100 d-none " id="Soppingcart" style="z-index: 5; ">
		<div class="col-md-6" style="
    background: #3e3e3e9e;
    z-index: 5;
"></div>
		<div class="border col-md-6 pr-0 rounded-left box_shadow" style="height: calc( 100vh - 82px);z-index: 5;background: white;">
			<div class="cart">
				<div class="mb-3 pb-2 pt-3 mt-3 px-3 row" style="background-color: #f7f7f7;">
					<div class="col-md-12 " style="line-height: 50px;">
						<h3 class="selectedCategry">My Cart <a href="./vegetables.php" class="small" style="color: #797979c7;">( 4 Items )</a></h3>
					</div>
				</div>
			</div>
			<div class="product px-4">
				<div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="align-items-center border mb-3 justify-content-around">
					<div class="align-items-center row">
						<div class="col-3">
							<img src="./images/cat-img4.jpg" alt="" class="w-100" style=" border-radius: 9px;">
						</div>
						<div class="col-5 pl-0">
							<h5 class="h5 ">Watermelon <span class="green_color mb-1 weight ">( 500 gm ) </span></h5>
							<h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i>100</span></span></h5>
						</div>
						<div class="col-4 text-right">
							<div class="">
								<span class=""><i class="fa-solid fa-trash-can" style="font-size: large;"></i></span>
								<div class="mt-3">
									<button class="border-secondary btn btn-sm green_bgcolor text-light" type="button" style="letter-spacing: 1px;"> <i class="fa-solid fa-minus text-light"></i> </button>
									<button class="btn btn-sm text-dark" type="button" style="letter-spacing: 1px;">10</button>
									<button class="border-secondary btn btn-sm green_bgcolor text-light" type="button" style="letter-spacing: 1px;"> <i class="fa-solid fa-plus text-light"></i> </button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="align-items-center border mb-3 justify-content-around">
					<div class="align-items-center row">
						<div class="col-3">
							<img src="./images/cat-img4.jpg" alt="" class="w-100" style=" border-radius: 9px;">
						</div>
						<div class="col-5 pl-0">
							<h5 class="h5 ">Watermelon <span class="green_color mb-1 weight ">( 500 gm ) </span></h5>
							<h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i>100</span></span></h5>
						</div>
						<div class="col-4 text-right">
							<div class="">
								<span class=""><i class="fa-solid fa-trash-can" style="font-size: large;"></i></span>
								<div class="mt-3">
									<button class="border-secondary btn btn-sm green_bgcolor text-light" type="button" style="letter-spacing: 1px;"> <i class="fa-solid fa-minus text-light"></i> </button>
									<button class="btn btn-sm text-dark" type="button" style="letter-spacing: 1px;">10</button>
									<button class="border-secondary btn btn-sm green_bgcolor text-light" type="button" style="letter-spacing: 1px;"> <i class="fa-solid fa-plus text-light"></i> </button>
								</div>
							</div>
						</div>
					</div>

				</div>


			</div>



		</div>
	</div>
	</div>

	<!-- </div> -->
</body>

<script src="./node_modules/izitoast/dist/js/iziToast.min.js"></script>
<script src="./js/addproduct.js"></script>
<script>

</script>

</html>