<!DOCTYPE html>
<html lang="en">
<style>
    .owl-carousel button .next-slide {
        top: -31% !important;
        right: 1% !important;
    }

    .owl-carousel button .prev-slide {
        top: -31% !important;
        right: 6% !important;
    }
    
ul li{
  display: block;
  position: relative;
}

ul li input[type=radio]{
  position: absolute;
  visibility: hidden;
}

ul li label{
  display: inline-block;
  position: relative;
  padding: 25px 15px 5px 0px;
  z-index: 9;
  cursor: pointer;
  -webkit-transition: all 0.25s linear;
}

ul li .check{
  position: absolute;
  border: 3px solid #AAAAAA;
  border-radius: 50%;
  height: 15px;
  width: 15px;
  top: 30px;
	transition: border .25s linear;
	-webkit-transition: border .25s linear;
}
ul li .check::before {
  display: block;
  position: absolute;
	content: '';
  border-radius: 100%;
  height: 9px;
  width: 9px;
  top: 2.5px;
	left: 2.5px;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
}

input[type=radio]:checked ~ .check {
  border: 3px solid #0DFF92;
}

input[type=radio]:checked ~ .check::before{
  background: #0DFF92;
}
</style>

<body>
    <!-- header  -->
    <?php include_once("./header.php") ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 align-items-center d-flex justify-content-around">
                <div class="productImage text-center">
                    <img src="./images/fruits/2-watermelon-without-bg.png" class="w-100" alt="">
                </div>
            </div>
            <div class="align-items-center col-md-4 d-flex pl-5">
                <div class="">
                    <h1 class="gray_color mb-3">Watermelon</h1>
                    <div class="d-flex justify-content-around mb-3">
                        <h5>Price : <span><i class="fa-indian-rupee-sign fa-solid mr-1"></i></span><span>80</span></h5>
                        <span class="ml-2 font-weight-normal gray_color">( Rs. 80/kg )</span>
                    </div>
                    <div class="align-items-center d-flex">
                        <button class="border-secondary btn green_bgcolor px-4 text-light" type="button" style="letter-spacing: 1px;">Add</button>
                        <span class="ml-3"><i class="d-none fa-heart fa-solid text-danger" style="font-size: x-large;"></i><i class="fa-regular fa-heart" id="favirateProduct" style="font-size: x-large;"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ProductQuentity pt-4" id="ProductQuentity ">
                    <div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border mb-3">
                        <div class="align-items-center d-flex justify-content-around ">
                            <img src="./images/2-watermelon.jpg" alt="" class="" style="width: 75px;">
                            <h5 class="Price">
                                <span class="">
                                    <span class="green_color">
                                        <i class="fa-indian-rupee-sign fa-solid mr-1"></i>
                                        100</span>
                                </span>
                            </h5>
                            <p class="green_color mb-1 weight text-muted">1 Kg </p>
                            <input type="radio" class="radio-btn" name="productWeight" id="">
                        </div>
                    </div>
                    <div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border mb-3">
                        <div class="align-items-center d-flex justify-content-around ">
                            <img src="./images/2-watermelon.jpg" alt="" class="" style="width: 75px;">
                            <h5 class="Price">
                                <span class="">
                                    <span class="green_color">
                                        <i class="fa-indian-rupee-sign fa-solid mr-1"></i>
                                        100</span>
                                </span>
                            </h5>
                            <p class="green_color mb-1 weight text-muted">1 Kg </p>
                            <input type="radio" class="radio-btn" name="productWeight" id="">
                        </div>
                    </div>
                    <div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border mb-3">
                        <div class="align-items-center d-flex justify-content-around ">
                            <img src="./images/2-watermelon.jpg" alt="" class="" style="width: 75px;">
                            <h5 class="Price">
                                <span class="">
                                    <span class="green_color">
                                        <i class="fa-indian-rupee-sign fa-solid mr-1"></i>
                                        100</span>
                                </span>
                            </h5>
                            <p class="green_color mb-1 weight text-muted">1 Kg </p>
                            <ul>
  <li>
    <input type="radio" id="f-option" name="selector">
    <label for="f-option">.</label>
    
    <div class="check"></div>
  </li>
                        </div>
                    </div>
                    <div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border mb-3">
                        <div class="align-items-center d-flex justify-content-around ">
                            <img src="./images/2-watermelon.jpg" alt="" class="" style="width: 75px;">
                            <h5 class="Price">
                                <span class="">
                                    <span class="green_color">
                                        <i class="fa-indian-rupee-sign fa-solid mr-1"></i>
                                        100</span>
                                </span>
                            </h5>
                            <p class="green_color mb-1 weight text-muted">1 Kg </p>
                            <ul>
  <li>
    <input type="radio" id="f-option" name="selector">
    <label for="f-option">.</label>
    
    <div class="check"></div>
  </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="mb-3 pb-2 pt-3 mt-3 px-5 row" style="background-color: #f7f7f7;">
            <div class="col-md-12 " style="line-height: 50px;">
                <h3 class="selectedCategry">Suggestion</h3>
                <div class="owl-carousel owl-theme my-4 productCarousel" id="SuggestionProductCarousel">
                    <!-- 
		<div class="item p-2">
			<div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="border">
				<img src="./images/cat-img4.jpg" alt="" width="300px" style=" border-radius: 9px;">
				<div class="d-flex">
					<h4 class="h5 pl-3 pr-2">Watermelon</h4>
					<p class="green_color mb-1 weight text-muted">( 500 gm ) </p>

				</div>
				<div class="align-items-center d-flex justify-content-between px-4">
					<div class="">
						<h5 class="Price"><span class=""><span class="green_color"><i
										class="fa-indian-rupee-sign fa-solid mr-1"></i>100</span></span></h5>
					</div>
					<button class="border-secondary btn btn-sm green_bgcolor px-4 text-light" type="button"
						style="letter-spacing: 1px;">Add</button>
				</div>
			</div>
		</div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="">
    <ul>
  <li>
    <input type="radio" id="f-option" name="selector">
    <label for="f-option">.</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s-option" name="selector">
    <label for="s-option">.</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="t-option" name="selector">
    <label for="t-option">.</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
</ul>

    </div>  



</body>
<script src="./js/javascript.js"></script>
<script>
    $('#SuggestionProductCarousel').owlCarousel({
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

</html>