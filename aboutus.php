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
      <h2 class="featurette-heading fw-normal lh-1" style="font-size:46px; text-transform: capitalize; text-align: center; font-weight:600 !important; color:#fff; font-family: montserrat;">
        About us</h2>
    </div>
  </div>

  <div class="container ho2" style="padding-top:40px; background-image: url('img/map1.png'); background-position: center;">
    <div class="row featurette">
      <div class="col-md-6">
        <img src="assets/img/road.png" width="100%">
      </div>
      <div class="col-md-6" style="">
        <h2 class="featurette-heading fw-normal lh-1 abhq" style="font-size:36px; font-weight:600 !important; color:#000; font-family: montserrat;">Rent2Ryde is Carbon
          Neutral Certified</h2>
        <p class="lead">Drive and share cars knowing your carbon footprint is balanced out by greenhouse-gas-reduction
          projects. Carbon-neutral travel on Rent2Ryde is now verified with a carbon neutral certification!</p>

        <img src="assets/img/scar.png" class="rentca" style="margin-top: -70px; width: 100%;">
      </div>
    </div>
  </div>


  <div class=" marketing mt-5 me-0 mb-5 ms-0" style="margin: 90px 0px; background-image: url('assets/img/Rectangle 7.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="row container-fluid" style="background-color:#593CFB; padding: 20px; 0px">
      <div class="col-md-6" style="text-align: center;">
        <h3 style="font-size:30px; font-weight:600 !important; color:#fff; font-family: montserrat;">Browse By Make</h3>
      </div>
      <div class="col-md-6" style="text-align: center;">
        <div class="col-md-6" style="text-align: right; align-items: center; padding: 8px 0px 0px 0px;">
          <button class="swiper-next"><i class="fa fa-arrow-left"></i></button>
          <button class="bg-transparent border-none outline-none swiper-prev"> <i class="fa fa-arrow-right"></i></button>
        </div>
      </div>
    </div>

    <div class="swiper mySwiper" style="padding: 40px;">
      <div class="swiper-wrapper">

        <div class="swiper-slide"><img src="assets/img/jep1.png" width="100px">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Jeep</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep2.png" width="100%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Tesla</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep3.png" width="100%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Subaru</h3>
        </div>

        <div class="swiper-slide"><img src="assets/img/jep1.png" width="100px">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Jeep</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep2.png" width="100%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Tesla</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep3.png" width="100%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Subaru</h3>
        </div>

        <div class="swiper-slide"><img src="assets/img/jep1.png" width="100px">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Jeep</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep2.png" width="100%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Tesla</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep3.png" width="100%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Subaru</h3>
        </div>


      </div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
          // el: ".swiper-pagination",
          clickable: true,
          navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
          }
        },
      });
    </script>
  </div>



  <div class="" style="padding-top:40px 0px !important; margin-bottom: 40px; background-image: url('img/map1.png'); background-position: center;">
    <div class="row featurette">
      <div class="col-md-6">
        <img src="assets/img/inpr.png" width="100%">
      </div>
      <div class="col-md-4 ho2" style="padding-left: 20px;">
        <h2 class="featurette-heading fw-normal lh-1 abhq" style="font-size:36px; font-weight:600 !important; color:#000; font-family: montserrat;">Inspire a journey</h2>
        <p class="lead">Choose a card design, enter an amount to give, and send digitally to friends or family.
          Send now or schedule for later. Recipients redeem their gift cards on the app or Rent2Ryde.com, and the credit never expires!</p>

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