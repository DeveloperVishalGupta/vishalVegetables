<?
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
	<link rel="stylesheet" href="../css/adminStyle.css">

	<!-- animated css  -->
	<!-- <link rel="stylesheet" href="./node_modules/animate.css/animate.css"> -->
	<!-- boostrap css link  -->
	<!-- <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="../boostrap/css/bootstrap.css"> -->
	<!-- <link rel="stylesheet" href="../boostrap/js/bootstrap.bundle.js"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- animate.js cdn  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- font awosome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- owlcarousel css  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- iziTost css  -->
	<link rel="stylesheet" href="../node_modules/izitoast/dist/css/iziToast.min.css">

	<!-- jquery cdn link  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

	<?php
	include 'dbconnection.php';
	if (isset($_POST['submit'])) {
		$productImage = mysqli_real_escape_string($connection, $_POST['ProductImage']);
		$ProductName = mysqli_real_escape_string($connection, $_POST['ProductName']);
		$ProductWeight = mysqli_real_escape_string($connection, $_POST['ProductWeight']);
		$ProductPrice = mysqli_real_escape_string($connection, $_POST['ProductPrice']);
		$ProductQuantity = mysqli_real_escape_string($connection, $_POST['ProductQuantity']);

		$ProductInsertQuery = "insert into vegetablesproduct (ProductImage, ProductName, ProductWeight , ProdcutPrice , ProductQuantity) values ('$productImage','$ProductName','$ProductWeight','$ProductPrice','$ProductQuantity')";
		$InsertToDB = mysqli_query($connection, $ProductInsertQuery);

		if ($InsertToDB) {
	?>
			<script>
				alert("inserted successful");
			</script>
		<?php
		} else {
		?>
			<script>
				alert("inserted unsuccessful");
			</script>
	<?php
		}
		// }
	}
	?>


	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Launch demo modal
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Fruits Product</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="POST">

						<label for="FruitsProductImage" class="font-weight-bold w-100">Image
							<input required type="file" style="font-weight: 500; font-style: italic;" name="ProductImage" id="FruitsProductImage" class="form-control">
						</label>
						<select name="ProductCategry" required id="ProductCategry">
							<option value="">250gm</option>
							<option value="">500gm</option>
							<option value="">750gm</option>
							<option value="">1Kg</option>
							<option value="">2Kg</option>
						</select>

						<label for="FruitsProductName" class="font-weight-bold w-100"> Name
							<input required type="text" name="ProductName" id="FruitsProductName" class="form-control">
						</label>

						<!-- <div class="btn-group py-3 w-100">
            <button type="button" class="align-items-center border btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" id="servicebtn" data-toggle="dropdown" aria-expanded="false">
           Quantity
            </button>
            <div class="dropdown-menu FIRSTserviceDD w-100">
                <button class="dropdown-item services" id=""  type="button">250gm</button>
                <button class="dropdown-item services" id=""  type="button">500gm</button>
                <button class="dropdown-item services" id=""  type="button">750gm</button>
                <button class="dropdown-item services" id=""  type="button">1kg</button>
                <button class="dropdown-item services" id=""  type="button">2kg</button>
            </div>
        </div> -->

						<select name="ProductWeight" required id="FruitsProductWeight">
							<option value="">250gm</option>
							<option value="">500gm</option>
							<option value="">750gm</option>
							<option value="">1Kg</option>
							<option value="">2Kg</option>
						</select>

						<label for="Name" class="font-weight-bold w-100">Price
							<input type="text" required name="ProductPrice" id="FruitsProductPrice" class="w-100 form-control">
						</label>

						<label for="Name" class="font-weight-bold w-100">Quantity
							<input type="text" required name="ProductQuantity" id="FruitsProducQuantity" class="form-control">
						</label>


					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger text-light btn-sm " data-dismiss="modal">Discard</button>
					<button type="submit" name="submit" class="btn btn-sm AddProductBtn">Add Product</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>

