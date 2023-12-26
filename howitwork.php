<!DOCTYPE html>
<html lang="en">

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


  <div class="row"
    style="padding:0px 0px 50px 0px; margin-top: 0px; background-image: url('assets/img/jeepbk.png'); background-position: center; background-size: cover;">
    <div col-md 12>
      <h2 class="featurette-heading fw-normal lh-1"
        style="font-size:46px; text-align: center; font-weight:600 !important; color:#fff; font-family: montserrat; padding-bottom: 30px;">
        How It Work</h2>
    </div>
    <div class="row featurette carfom" style="margin: 10px 0px 0px 80px; width: 80%;">
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
      <div class="col-12 col-md-4">
        <div class="form-inline d-flex align-item-center">
          <label style="color: #fff; padding: 5px 10px 0px 5px;">TO </label>
          <input type="datetime-local" class="form-control" name="">
        </div>
      </div>
    </div>
  </div>

  <div class="work container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="fw-normal lh-1"
          style="font-size:40px; font-weight:600 !important; color:#000000; font-family: montserrat; text-align: center; text-transform: capitalize; padding: 60px 0px 30px 0px;">
          How Rent2Ryde works</h2>
      </div>
    </div>
  </div>

  <div class="workf container">
    <div class="row featurette" style="padding:0px 50px 0px 50px;">
      <div class="col-md-6" style="">
        <div class="work1 d-flex">
          <i class="fa fa-car" aria-hidden="true"></i>
          <h2 class=" fw-normal lh-1"
            style="font-size:22px; font-weight:600 !important; color:#000000; font-family: montserrat; text-transform: capitalize; padding: 10px 0px 0px 12px;">
            Find the perfect car</h2>
        </div>
        <p class="lead" style="font-size: 18px;">Enter a location and date and browse thousands of cars shared by local
          hosts.</p>

        <div class="work1 d-flex">
          <i class="fa fa-suitcase" aria-hidden="true"></i>
          <h2 class=" fw-normal lh-1"
            style="font-size:22px; font-weight:600 !important; color:#000000; font-family: montserrat; text-transform: capitalize; padding: 10px 0px 0px 12px;">
            Book your trip</h2>
        </div>
        <p class="lead" style="font-size: 18px;">Book on the Turo app or online, choose a protection plan, and say hi to
          your host! Cancel for free up to 24 hours before your trip.</p>
        <div class="work1 d-flex">
          <i class="fa fa-road" aria-hidden="true"></i>
          <h2 class=" fw-normal lh-1"
            style="font-size:22px; font-weight:600 !important; color:#000000; font-family: montserrat; text-transform: capitalize; padding: 10px 0px 0px 12px;">
            Hit the road</h2>
        </div>
        <p class="lead" style="font-size: 18px;">Have the car delivered or pick it up from your host. Check in with the
          app, grab the keys, and hit the road!</p>
      </div>

      <div class="col-md-6">
        <img src="assets/img/key.png" width="100%" height="100%">
      </div>
    </div>
  </div>

  <div class="optn" style="background-image: url('assets/img/tr.png'); padding-bottom: 60px;">
    <div class="row">
      <div class="col-12 ">
        <h2 class="featurette-heading fw-normal lh-1"
          style="font-size:40px; font-weight:600 !important; color:#593CFB; font-family: montserrat; text-align: center; text-transform: capitalize;">
          Book a car</h2>
        <h5 class=" fw-normal lh-1"
          style="font-size:20px; font-weight:600 !important; color:#000000; font-family: montserrat; text-align: center; text-transform: capitalize;">
          Browse the world’s largest car sharing marketplace</h5>
        <p class="lead" style="font-size: 18px; text-align: center;">Whether it’s an SUV for a family road trip, a
          pickup truck for some errands, <br>or a classic sports car for a special night out, find the perfect car for
          all kinds of occasions and budgets on Turo.</p>
        <button
          style="padding:10px 40px; text-align: center; margin: 20px 0px; background-color: blue; font-family: poppins; display: block; margin: 0 auto; font-size: 16px; color: #fff; border: none;">Book
          The Perfect Car</button>
      </div>
    </div>
  </div>


  <div class=" marketing"
    style="margin: 0px 0px; background-image: url('assets/img/Rectangle 7.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="row container-fluid" style="background-color:#593CFB; padding: 20px; 0px">
      <div class="col-md-6" style="text-align: center;">
        <h3 style="font-size:30px; font-weight:600 !important; color:#fff; font-family: montserrat;">Browse By Make</h3>
      </div>
      <div class="col-md-6" style="text-align: center;">
        <div class="col-md-6" style="text-align: right; padding: 8px 0px 0px 0px;">
          <button class="swiper-next">
            <i class="fa fa-arrow-left"></i>
          </button>
          <button class="bg-transparent border-none outline-none swiper-prev" >
            <i class="fa fa-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>

    <div class="swiper mySwiper" style="padding: 40px;">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/img/jep1.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Jeep</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/jep2.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Jeep</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep3.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Tesla</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep1.png" width="80%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Subaru</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep2.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Jeep</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/jep3.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Jeep</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep1.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Tesla</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/jep2.png" width="80%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Subaru</h3>
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

  </div>


  <div class=" marketing"
    style="margin: 0px 0px; background-image: url('assets/img/Rectangle 7.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="row container-fluid" style="background-color:#593CFB; padding: 20px; 0px">
      <div class="col-md-6" style="text-align: center;">
        <h3 style="font-size:30px; font-weight:600 !important; color:#fff; font-family: montserrat;">Browse By Category
        </h3>
      </div>
      <div class="col-md-6" style="text-align: center;">
        <div class="col-md-6" style="text-align: right; padding: 8px 0px 0px 0px;">
          <button class="swiper-next"><i class="fa fa-arrow-left"></i></button>
          <button class="bg-transparent border-none outline-none swiper-prev"> <i
              class="fa fa-arrow-right"></i></button>
        </div>
      </div>
    </div>

    <div class="swiper mySwiper" style="padding: 40px;">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/img/ca2.jpg" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 6px;">
            Vans</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/ca3.jpg" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 6px;">
            Sports Car</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/ca4.jpg" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 6px;">
            Classics</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/ca5.jpg" width="80%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 6px;">
            Trucks</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/ca6.jpg" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 6px;">
            SUVs</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/ca7.jpg" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 6px;">
            Minivans</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/ca8.jpg" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 6px;">
            Exotic & Luxury</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/ca9.jpg" width="80%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins; padding-top: 6px;">
            Convertibles</h3>
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

  <div class="spng">
    <div class="container">
      <div class="row">
        <div class="col-12" style="padding: 0px 0px 20px 0px;">
          <h5 class=""
            style="font-size:46px; text-transform:capitalize; font-weight:600 !important; color:#000; font-family:poppins; text-align: center;">
            Why Rent2Ryde?</h5>
          <h5 class=""
            style="font-size:18px; text-transform:capitalize; font-weight:600 !important; color:#000; font-family:poppins; text-align: center;">
            Skip the rental counter</h5>
        </div>
      </div>
      <div class="row featurette sprig lh-1">
        <div class="col-md-6">

          <h2 class="fw-normal"
            style="font-size:30px; font-weight:600 !important; padding-top: 40px; color:#593CFB; font-family: montserrat; text-transform: capitalize;">
            More bang for your buck</h2>
          <p class="">Find deals on all kinds of drives — from the everyday to the extraordinary — complete with a
            better, more convenient experience versus rental car companies. Find the perfect vehicle for your budget,
            starting at $25 per day.</p>

          <h2 class="fw-normal"
            style="font-size:30px; font-weight:600 !important; color:#593CFB; font-family: montserrat; text-transform: capitalize;">
            Free cancellation</h2>
          <p class="">Cancel for a full refund up to 24 hours before your trip starts. Because life happens and it helps
            to be flexible when it does.</p>


          <h2 class="fw-normal"
            style="font-size:30px; font-weight:600 !important; color:#593CFB; font-family: montserrat; text-transform: capitalize;">
            Convenient delivery options</h2>
          <p class="">Get your car delivered right to you or wherever you’re going. Many hosts offer delivery to custom
            locations or popular points of interest like airports, train stations, and hotels.</p>

        </div>

        <div class="col-md-6">
          <img src="assets/img/hir.jpg" width="100%">
        </div>
      </div>
    </div>
  </div>



  <div class=" marketing"
    style="margin: 90px 0px 0px 0px; background-image: url('assets/img/Rectangle 7.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="row container-fluid"
      style="background-color:#593CFB; display: flex; justify-content: center; padding: 20px; 0px">
      <div class="col-md-6" style="text-align: center;">
        <h3 style="font-size:30px; font-weight:600 !important; color:#fff; font-family: montserrat;">Browse By
          Destination</h3>
      </div>
      <div class="col-md-6" style="text-align: center;">
        <div class="col-md-6" style="text-align: right; padding-top: 6px;">
          <button class="swiper-next"><i class="fa fa-arrow-left"></i></button>
          <button class="bg-transparent border-none outline-none swiper-prev"> <i
              class="fa fa-arrow-right"></i></button>
        </div>
      </div>
    </div>

    <div class="swiper mySwiper" style="padding: 40px;">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="assets/img/dd1.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Abuja</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/dd2.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Lagos</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/dd3.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Kano</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/dd4.png" width="80%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Ibadan</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/dd1.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Abuja</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/dd2.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Lagos</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/dd3.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Kano</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/dd4.png" width="80%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Ibadan</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/dd1.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Abuja</h3>
        </div>
        <div class="swiper-slide"><img src="assets/img/dd2.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Lagos</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/dd3.png" width="90%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Kano</h3>
        </div>
        <div class="swiper-slide">
          <img src="assets/img/dd4.png" width="80%">
          <h3 class="fw-normal"
            style="font-size:22px; text-transform:capitalize; font-weight:400 !important; color:#000; text-align: center; font-family:poppins;">
            Ibadan</h3>
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



  <div class="container-fluid"
    style="padding-top:40px; background-image: url('assets/img/tr.png'); background-position: center;">
    <div class="row">
      <div class="col-12">
        <h2 class=" fw-normal lh-1"
          style="font-size:40px; text-align: center; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">
          You’re covered</h2>
      </div>
    </div>
    <div class="row featurette" style="padding:0px 50px 50px 50px;">

      <div class="col-md-6">
        <img src="assets/img/giftcar2.png" class="featurette-heading" width="80%">
      </div>

      <div class="col-md-6 pt-1" style="padding:0px 0px 0px 50px;">
        <h3 class="featurette-heading fw-normal lh-1"
          style="font-size:40px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">
          Physical damage protection</h3>
        <p class="">Choose from three protection plans — Premier, Standard, or Minimum — to get the level of coverage
          that’s right for you. Spring for Premier for peace of mind, or pay less for lighter coverage with higher
          out-of-pocket costs for vehicle damage or theft.</p>
        <h3 class="fw-normal lh-1"
          style="font-size:40px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">
          Liability insurance included</h3>
        <p class="">All Turo protection plans include coverage under a third-party liability insurance policy issued to
          Turo, from Travelers Excess and Surplus Lines Company (“Travelers”). The Travelers policy provides secondary
          (excess) coverage, to ensure that any Turo approved driver will be insured up to the state minimum limits
          required for third-party liability, unless primary coverage is explicitly required by an applicable state
          statute (e.g., Maryland and New York).</p>
        <h3 class="fw-normal lh-1"
          style="font-size:40px; font-weight:600 !important; color:#000; font-family: montserrat; text-transform: capitalize;">
          24/7 support & roadside assistance</h3>
        <p class="">Customer support is available online 24/7 to answer your questions, and 24/7 roadside assistance is
          just a call away to keep you safe and on the road.</p>
      </div>
    </div>
  </div>


  <?php
include("footer.php")
?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"></script>

      <?php
    include("chat.php")
    ?>


</body>

</html>