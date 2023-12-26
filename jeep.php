<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
		<h2 class="featurette-heading fw-normal lh-1" style="font-size:46px; text-transform: capitalize; text-align: center; font-weight:600 !important; color:#fff; font-family: montserrat;">jeeps</h2>
</div>
</div>


 <!-- Three columns of text below the carousel -->
    <div class="row container-fluid" style="padding: 60px 0px; background-image: url('assets/img/Rectangle 7.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
       <div class="swiper mySwiper" style="padding: 40px;">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
         <img src="assets/img/jep1.png" width="90%">
        <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Jeep</h3>
      </div>
      <div class="swiper-slide">
        <img src="assets/img/jep3.png" width="90%">
        <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Tesla</h3>
      </div>
      <div class="swiper-slide">
         <img src="assets/img/jep2.png" width="80%">
        <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Subaru</h3>
      </div>
      <div class="swiper-slide">
        <img src="assets/img/jep1.png" width="90%">
       <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Jeep</h3>
     </div>
     <div class="swiper-slide">
       <img src="assets/img/jep3.png" width="90%">
       <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Tesla</h3>
     </div>
     <div class="swiper-slide">
        <img src="assets/img/jep2.png" width="80%">
       <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Subaru</h3>
     </div>
      
      
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
    </div><!-- /.row -->






<div class="container hocar" style="padding: 0px 0px;">
<h2 class="featurette-heading fw-normal lh-1" style=" font-size:36px; font-weight:800!important; color:#000; font-family: montserrat; text-align: center; text-transform: capitalize;">Find the perfect <span style="color: #593CFB;">car</span> to unwind for the weekend
</h2>	
<p style="text-align: center;">
From daily drivers to spirited sports cars, ditch the grind with convenient nearby cars.
</p>
</div>


    <div id="carouselExampleDark" class="carousel carousel-dark slide" style="padding: 60px 0px;">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="assets/img/carsi.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/img/carsi.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/carsi.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container hofec" >
  <div class="row featurette sprig lh-1">
    
    <div class="col-md-6">
      <h5 class="featurette-heading" style="font-size:26px; text-transform:capitalize; font-weight:600 !important; color:#000; font-family:poppins;">FEATURED TRAVELOGUE</h5>
      <h2 class="fw-normal" style="font-size:50px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">Late spring on the  Sea-to-Sky Highway</h2>
      <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
      <button type="button" class="btn btn-primary">Read More</button>
    </div>

    <div class="col-md-6">
      <img src="assets/img/spring.png" width="100%">
    </div>
  </div>
</div>


<?php
include("footer.php")
?>



   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<?php
    include("chat.php")
    ?>


</body>
</html>