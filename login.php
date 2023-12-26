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

  <div class="row"
    style="padding:0px 0px 50px 0px; margin-top: 0px; background-image: url('assets/img/jeepbk.png'); background-position: center; background-size: cover;">
    <div col-md 12>
      <h2 class="featurette-heading fw-normal lh-1"
        style="font-size:46px; text-transform: capitalize; text-align: center; font-weight:600 !important; color:#fff; font-family: montserrat;">
        Sign in</h2>
    </div>
  </div>


<div class="siote">
  <div class="container" style="width: 50%;">
  <form>
        <h3>Sign In</h3>
        <div className="mb-3">
          <label>Email address</label>
          <input
            type="email"
            className="form-control"
            placeholder="Enter email"
          />
        </div>
        <div className="mb-3">
          <label>Password</label>
          <input
            type="password"
            className="form-control"
            placeholder="Enter password"
          />
        </div>
        <div className="mb-3">
          <div className="custom-control custom-checkbox">
            <input
              type="checkbox"
              className="custom-control-input"
              id="customCheck1"
            />
            <label className="custom-control-label" htmlFor="customCheck1">
              Remember me
            </label>
          </div>
        </div>
        <div className="d-grid">
          <button type="submit" className="btn btn-primary">
            Submit
          </button>
        </div>
        <div class="nus" style="display:flex;">
        <p className="forgot-password text-right">
          Forgot <a href="https://carrental.techmarketingexperts.com/signin.php">password?</a>
        </p>
        <p className="forgot-password text-right" style="padding-left: 10px;">
          New User? <a href="https://carrental.techmarketingexperts.com/signin.php">Create Your Account</a>
        </p>
        </div>
      </form>
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




