<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Rental</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/font/RemachineScript_Personal_Use.ttf">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

	<?php
	include("./header.php")
	?>

	<div class="row" style="padding:0px 0px 50px 0px; margin-top: 0px; background-image: url('assets/img/jeepbk.png'); background-position: center; background-size: cover;">
		<div col-md 12>
			<h2 class="featurette-heading fw-normal lh-1" style="font-size:46px; text-align: center; font-weight:600 !important; color:#fff; font-family: montserrat; padding-bottom: 70px;">Find a Car</h2>
		</div>

		<div class="formm" style="width:80%; display: block; margin: 0 auto;">
			<div class="row featurette carfom1" style="margin: 10px 0px 0px 80px; width: 80%;">
				<div class="col-12 col-md-4 carfom">
					<div class="form-inline d-flex align-item-center">
						<label style="color: #fff; padding: 5px 10px 0px 5px;">WHERE</label>
						<input type="text" class="form-control" name="" placeholder="Find">
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="form-inline d-flex align-item-center">
						<label style="color: #fff; padding: 5px 10px 0px 5px;">FROM</label>
						<input type="datetime-local" class="form-control" name="">
					</div>
				</div>
				<div class="col-12 col-md-4" style="padding: ;">
					<div class="form-inline d-flex align-item-center">
						<label style="color: #fff; padding: 5px 10px 0px 5px;">TO </label>
						<input type="datetime-local" class="form-control" name="">
						<div class="formmi" style="padding-top: 8px;">

							<i class="fa-solid fa-magnifying-glass"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="findb" style="margin: 20px 70px;">
		<div class="row featurette d-flex justify-content-center">
			<div class="col-6 col-md-12 text-center">
				<button class="btn btn-primary">Sort By</button>
				<button class="btn btn-primary">Daily Price</button>
				<button class="btn btn-primary">Book Instanly</button>
				<button class="btn btn-primary">More Filters</button>
			</div>
		</div>
	</div>


	<div class="findbre container" style="margin: 20px 0px 0px 60px;">
		<div class="row featurette d-flex justify-content-center">
			<div class="col-6 col-md-12" style="">
				<h2 class="fw-normal" style="font-size:40px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">200+ cars at or near hotel</h2>
				<p>These cars can be picked up at or near this hotel.</p>
			</div>
		</div>
	</div>

	<div class="carres container" style="margin: 20px 0px 0px 0px;">
		<div class="row featurette d-flex justify-content-center" style="">
			<div class="col-6 col-md-8 overflow-scroll" style="max-height: 700px; overflow-x: hidden !important;">
				<div class="row featurette mx-2">
					<div class="col-12 col-md-12 d-flex justify-content-center my-1">
						<a href="https://carrental.techmarketingexperts.com/singlecar.html">
							<img src="assets/img/tesla12.jpg" width="100%" height="200px align-item-left">
						</a>
						<div class="fndcon border rounded border-start-0" style="padding: 10px 0px 0px 15px;">
							<a href="https://carrental.techmarketingexperts.com/singlecar.html">
								<h3 class="fw-normal" style="padding-top: 20px; font-size:30px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">Tesla Model X 2018</h3>
							</a>
							<p>4.9 (22 trips) All-Star Host</p>
							<p>Pickup at La Quinta Inn & Suites by Wyndham USF (Near Busch Gardens)</p>
						</div>
					</div>

					<div class="col-12 col-md-12 d-flex justify-content-center my-1">
						<a href="https://carrental.techmarketingexperts.com/singlecar.html">
							<img src="assets/img/findimg3.jpg" width="100%" height="200px align-item-left">
						</a>

						<div class="fndcon border rounded border-start-0" style="padding: 10px 0px 0px 15px;">
							<h3 class="fw-normal" style="padding-top: 20px; font-size:30px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">Toyota Corolla 2022</h3>
							<p>4.9 (22 trips) All-Star Host</p>
							<p>Pickup at La Quinta Inn & Suites by Wyndham USF (Near Busch Gardens)</p>
						</div>
					</div>

					<div class="col-12 col-md-12 d-flex justify-content-center my-1">
						<a href="https://carrental.techmarketingexperts.com/singlecar.html">
							<img src="assets/img/findimg2.jpg" width="100%" height="200px align-item-left">
						</a>

						<div class="fndcon border rounded border-start-0" style="padding: 10px 0px 0px 15px;">
							<h3 class="fw-normal" style="padding-top: 20px; font-size:30px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">Mazda Mazda3 2016</h3>
							<p>4.9 (22 trips) All-Star Host</p>
							<p>Pickup at La Quinta Inn & Suites by Wyndham USF (Near Busch Gardens)</p>
						</div>
					</div>

					<div class="col-12 col-md-12 d-flex justify-content-center my-1">
						<img src="assets/img/tesla12.jpg" width="50%" height="200px align-item-left">

						<div class="fndcon border rounded border-start-0" style="padding: 10px 0px 0px 15px;">
							<h3 class="fw-normal" style="padding-top: 20px; font-size:30px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">Tesla Model X 2018</h3>
							<p>4.9 (22 trips) All-Star Host</p>
							<p>Pickup at La Quinta Inn & Suites by Wyndham USF (Near Busch Gardens)</p>
						</div>
					</div>

					<div class="col-12 col-md-12 d-flex justify-content-center my-1">
						<img src="assets/img/findimg3.jpg" width="50%" height="200px align-item-left">

						<div class="fndcon border rounded border-start-0" style="padding: 10px 0px 0px 15px;">
							<h3 class="fw-normal" style="padding-top: 20px; font-size:30px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">Toyota Corolla 2022</h3>
							<p>4.9 (22 trips) All-Star Host</p>
							<p>Pickup at La Quinta Inn & Suites by Wyndham USF (Near Busch Gardens)</p>
						</div>
					</div>

					<div class="col-12 col-md-12 d-flex justify-content-center my-1">
						<img src="assets/img/findimg2.jpg" width="50%" height="200px align-item-left">

						<div class="fndcon border rounded border-start-0" style="padding: 10px 0px 0px 15px;">
							<h3 class="fw-normal" style="padding-top: 20px; font-size:30px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">Mazda Mazda3 2016</h3>
							<p>4.9 (22 trips) All-Star Host</p>
							<p>Pickup at La Quinta Inn & Suites by Wyndham USF (Near Busch Gardens)</p>
						</div>
					</div>
				</div>

			</div>
			<div class="col-6 col-md-4" style="margin-left: 0px;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d429174.1217512339!2d-97.06121664275169!3d32.82080972834751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c19f77b45974b%3A0xb9ec9ba4f647678f!2sDallas%2C%20TX%2C%20USA!5e0!3m2!1sen!2s!4v1701814723332!5m2!1sen!2s" width="500" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

		</div>
	</div>

	<?php
    include("chat.php")
    ?>




	<?php
	include("footer.php")
	?>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>