<!DOCTYPE html>
<html lang="en">

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


  <div class="row" style="padding:0px 0px 30px 0px; margin-top: 0px; background-image: url('assets/img/jeepbk.png'); background-position: right; background-size: cover;">
    <div col-md 12>
      <h2 class="featurette-heading fw-normal lh-1" style="font-size:46px; text-align: center; font-weight:600 !important; color:#fff; font-family: montserrat; padding-bottom: 30px;">Wedding Getaway Cars</h2>
    </div>
  </div>


  <div class=" marketing" style="margin: 0px 0px; background-image: url('assets/img/Rectangle 7.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="row" style=" padding: 0px; 0px 0px 0px !important">
      <div class="col-12">
        <h2 class="" style="font-size:40px; padding-top: 40px; font-weight:600 !important; color:#000000; font-family: montserrat; text-align: center; text-transform: capitalize;">The perfect finishing touch </h2>
        <h5 class="" style="font-size:22px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: montserrat; text-align: center; text-transform: capitalize;">Cap off your big day with a show-stopping "just married" ride</h5>
        <p></p>
      </div>

    </div>

    <div class="swiper mySwiper" style="padding: 40px;">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/img/wed1.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 10px;">Classics</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/wed2.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 10px;">Exotic & luxury</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/wed3.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 10px;">Sports cars</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/wed4.png" width="80%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 10px;">Convertibles</h3>
        </div>

        <div class="swiper-slide">
          <img src="assets/img/wed1.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 10px;">Classics</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/wed2.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 10px;">Exotic & luxury</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/wed3.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 10px;">Sports cars</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/wed4.png" width="80%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 10px;">Convertibles</h3>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
  </div>



  <div class="work container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="fw-normal lh-1" style="font-size:40px; font-weight:600 !important; color:#000000; font-family: montserrat; text-align: center; text-transform: capitalize; padding: 60px 0px 0px 0px;">Upgrade your wedding car</h2>
        <h5 class="" style="font-size:22px; padding-top: 0px; font-weight:500 !important; color:#000000; font-family: montserrat; text-align: center; text-transform: capitalize;">Cap off your big day with a show-stopping "just married" ride</h5>
      </div>
    </div>
  </div>

  <div class="workf container">
    <div class="row featurette" style="padding:0px 50px 0px 50px;">
      <div class="col-md-6" style="">
        <div class="work1 d-flex">
          <i class="fa fa-car featurette-heading" aria-hidden="true"></i>
          <h2 class="featurette-heading fw-normal lh-1" style="font-size:22px; font-weight:600 !important; color:#000000; font-family: montserrat; text-transform: capitalize; padding: 10px 0px 0px 12px;">Endless options</h2>
        </div>
        <p class="lead" style="font-size: 18px;">From classic beauties to extravagant head-turners, choose from thousands of unique cars you won't find anywhere else.</p>

        <div class="work1 d-flex">
          <i class="fa fa-suitcase" aria-hidden="true"></i>
          <h2 class=" fw-normal lh-1" style="font-size:22px; font-weight:600 !important; color:#000000; font-family: montserrat; text-transform: capitalize; padding: 10px 0px 0px 12px;">Convenient delivery options</h2>
        </div>
        <p class="lead" style="font-size: 18px;">Book ahead and get your car delivered when you need it - many hosts offer delivery to custom locations or popular points of interest like hotels.</p>
        <div class="work1 d-flex">
          <i class="fa fa-road" aria-hidden="true"></i>
          <h2 class=" fw-normal lh-1" style="font-size:22px; font-weight:600 !important; color:#000000; font-family: montserrat; text-transform: capitalize; padding: 10px 0px 0px 12px;">You're covered</h2>
        </div>
        <p class="lead" style="font-size: 18px;">Keep your big day worry-free. Choose a protection plan that's right for you, and get 24/7 support and roadside assistance included.</p>
      </div>

      <div class="col-md-6">
        <img src="assets/img/brid1.jpg" width="100%" height="100%">
      </div>
    </div>
  </div>


  <div class=" marketing" style="margin: 0px 0px; background-image: url('assets/img/Rectangle 7.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="row container-fluid" style="background-color:#593CFB; padding: 20px; 0px">
      <div class="col-md-6" style="text-align: center;">
        <h3 style="font-size:30px; font-weight:600 !important; color:#fff; font-family: montserrat;">Browse By Make</h3>
      </div>
      <div class="col-md-6" style="text-align: center;">
        <div class="col-md-6" style="text-align: right; padding: 8px 0px 0px 0px;">
          <button class="swiper-next"><i class="fa fa-arrow-left"></i></button>
          <button class="bg-transparent border-none outline-none swiper-prev"> <i class="fa fa-arrow-right"></i></button>
        </div>
      </div>
    </div>

    <div class="swiper mySwiper" style="padding: 40px;">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/img/jep1.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Jeep</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/jep2.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Jeep</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep3.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Tesla</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep1.png" width="80%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Subaru</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep2.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Jeep</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/jep3.png" width="90%">
          <h3 class="fw-normal" style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">Jeep</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep1.png" width="90%">
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
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>

  </div>

  <div class="" style="padding-top:40px 0px !important; margin:50px 0px;">
    <div class="row featurette">
      <div class="col-md-6">
        <img src="assets/img/story.png" width="100%">
      </div>
      <div class="col-md-4 ho2" style="">
        <h5 class="featurette-heading fw-normal lh-1 abhq" style="font-size:18px; font-weight:600 !important; color:#000; font-family: montserrat;">MAKING WEDDING DAY EXTRA MEMORABLE</h5>
        <h2 class=" fw-normal lh-1 abhq" style="font-size:40px; font-weight:600 !important; color:#000; font-family: montserrat;">Love Notes</h2>
        <p class="lead">When Natalie married her childhood best friend Austin, she found the perfect red Jeep on Turo to recreate a treasured old photo on their wedding day.</p>

      </div>
    </div>
  </div>


  <?php
  include("footer.php")
  ?>

  
<?php
    include("chat.php")
    ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</body>


</html>